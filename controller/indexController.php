<?php

require_once("../config/config.php");
require_once("../model/ArticleRepository.php");


//      $loader = new \Twig\Loader\FilesystemLoader('../template');
//        $twig = new \Twig\Environment($loader);
//
//
//        echo $twig->render('page/index.html.twig');

class IndexController
{

    public function index()
    {

        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findAll();


        require_once('../template/page/indexView.php');
    }


}

