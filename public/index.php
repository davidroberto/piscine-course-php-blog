<?php

require_once('../controller/ArticleController.php');
require_once('../controller/IndexController.php');

// Récupérer l'URL demandée
$request = $_SERVER['REQUEST_URI'];

// Nettoyer l'URL (enlever les paramètres GET)
$uri = parse_url($request, PHP_URL_PATH);

// Enlever le préfixe /piscine-blog/public/
$uri = str_replace('/piscine-blog/public/', '', $uri);
$uri = trim($uri, '/');

if($uri === "") {
    $indexController = new IndexController();
    $indexController->index();
} else if ($uri === "add-article") {
    $addArticleController = new ArticleController();
    $addArticleController->addArticle();
} else if ($uri === "show-article") {
    $addArticleController = new ArticleController();
    $addArticleController->showArticle();
}
