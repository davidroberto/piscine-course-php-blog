<?php

require_once('../config/config.php');

$dbConnection = new DbConnection();
$pdo = $dbConnection->connect();


$stmt = $pdo->query("SELECT * FROM article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('../template/page/indexView.php');