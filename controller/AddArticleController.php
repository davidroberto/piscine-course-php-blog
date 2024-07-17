<?php

require_once("../config/config.php");


class AddArticleController
{

    public function addArticle() {

        // model
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        // controller
        $title = "Mon super article";
        $content = "blablabla";
        $date = "24-07-17";

        // model
        $sql = "INSERT INTO article (title, content, created_at) VALUES (:title, :content, :created_at)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':created_at', $date);

        // view
        if ($stmt->execute()) {
            echo "Nouvel article ajouté avec succès";
        } else {
            echo "Erreur lors de l'ajout de l'article";
        }

    }

}


$addArticleController = new AddArticleController();
$addArticleController->addArticle();