<?php

require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

class ArticleController
{

    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../template');
        $this->twig = new \Twig\Environment($loader);
    }


    public function addArticle()
    {

        $isRequestOK = false;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $title = $_POST['title'];
            $content = $_POST['content'];
            $dateNow = new DateTime("NOW");
            $date = $dateNow->format('Y-m-d');

            $articleRepository = new ArticleRepository();
            $isRequestOK = $articleRepository->insert($title, $content, $date);

        }

        echo $this->twig->render('page/addArticle.html.twig', [
            'isRequestOK' => $isRequestOK
        ]);

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

        echo $this->twig->render('page/showArticle.html.twig', [
            'article' => $article
        ]);
    }


    public function deleteArticle() {
        $id = $_GET['id'];

        $articleRepository = new ArticleRepository();
        $isRequestOk = $articleRepository->deleteOneById($id);

        if ($isRequestOk) {
            header('Location: http://localhost:8888/piscine-blog/public/');
        } else {

            echo $this->twig->render('page/deleteArticleFail.html.twig');
        }

    }

}

