<?php

require_once('../controller/ArticleController.php');
require_once('../controller/IndexController.php');

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/piscine-blog/public/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {

    $indexController = new IndexController();
    $indexController->index();

} else if ($endUri === "add-article") {

    $addArticleController = new ArticleController();
    $addArticleController->addArticle();

} else if ($endUri === "show-article") {

    $addArticleController = new ArticleController();
    $addArticleController->showArticle();

} else if ($endUri === "delete-article") {

    $addArticleController = new ArticleController();
    $addArticleController->deleteArticle();

} else {
    echo '<p>Dégage</p>';
}
