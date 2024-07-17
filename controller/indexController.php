<?php

require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

class IndexController {

	public function index() {
        $articleRepository = new ArticleRepository();
        $articles = $articleRepository->findAll();

		require_once('../template/page/indexView.php');
	}


}

$indexController = new IndexController();
$indexController->index();

