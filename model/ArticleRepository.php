<?php


require_once("../config/config.php");


class ArticleRepository
{

    public function findAll()
    {
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }

    // la méthode insert permet de sauver des données dans la table article
    // elle insère le titre, le contenu et la date qu'on lui envoie en parametre
    public function insert($title, $content, $date)
    {

        // model
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        // model
        $sql = "INSERT INTO article (title, content, created_at) VALUES (:title, :content, :created_at)";
        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':created_at', $date);

       $isRequestOk = $stmt->execute();

       return $isRequestOk;
    }


}