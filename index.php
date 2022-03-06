<?php
    require 'Article.php';
    $article = new Article();
    $article->setTitle("Titulo");
    $article->setDate("6/3/2022");
    $article->setImage_url("http://url");
    $article->setContent("This is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articuleThis is my firts articule");
    $article_section = $article->MakeArticle();
    require 'index.view.php';
?>