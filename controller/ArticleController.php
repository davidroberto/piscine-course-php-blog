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

    public function showArticle()
    {
        $articleRepository = new ArticleRepository();
        $article = $articleRepository->findOneById("1");

        require_once('../template/page/showArticleView.php');
    }

}
