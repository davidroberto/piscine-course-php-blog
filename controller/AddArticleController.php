<?php

require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

class AddArticleController
{

    public function addArticle()
    {
        $title = "test";
        $content = "test";
        $date = "24-07-07";

        $articleRepository = new ArticleRepository();
        $isRequestOK = $articleRepository->insert($title, $content, $date);

        require_once('../template/page/addArticleView.php');

    }

}
