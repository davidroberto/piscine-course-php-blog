<?php

require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

class ArticleController
{

    public function addArticle()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $title = $_POST['title'];
            $content = $_POST['content'];
            $dateNow = new DateTime("NOW");
            $date = $dateNow->format('Y-m-d');

            $articleRepository = new ArticleRepository();
            $isRequestOK = $articleRepository->insert($title, $content, $date);

        }


        require_once('../template/page/addArticleView.php');

    }


    public function showArticle() {
        // récupère l'id passé dans l'url de la requête
        $id = $_GET['id'];

        // on instancie le repository pour accéder aux méthodes
        // de BDD
        $articleRepository = new ArticleRepository();
        // on appelle la méthode qui permet de récup un article
        // en fonction de son id
        $article = $articleRepository->findOneById($id);

        // on appelle la vue
        // qui affiche l'article
        require_once('../template/page/showArticleView.php');
    }


    public function deleteArticle() {
        $id = $_GET['id'];

        $articleRepository = new ArticleRepository();
        $isRequestOk = $articleRepository->deleteOneById($id);

        if ($isRequestOk) {
            header('Location: http://localhost:8888/piscine-blog/public/');
        } else {
            require_once('../template/page/deleteArticleFailView.php');
        }

    }

}

