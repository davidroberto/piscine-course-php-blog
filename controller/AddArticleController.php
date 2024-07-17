<?php


require_once("../config/config.php");
require_once("../model/ArticleRepository.php");



class AddArticleController
{

    public function addArticle()
    {

        // controller
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = new DateTime('NOW');

        // j'instancie l'ArticleRepository
        // et j'appelle la méthode insert
        // on lui donnant les valeurs pour le titre, le contenu et la date
        // que je veux insérer
        $articleRepository = new ArticleRepository();
        $articleRepository->insert($title, $content, $date);




    }

}


$addArticleController = new AddArticleController();
$addArticleController->addArticle();