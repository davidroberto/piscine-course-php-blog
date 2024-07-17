<?php

require_once("../config/config.php");


class ArticleRepository
{

    public function findAll() {
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }


}