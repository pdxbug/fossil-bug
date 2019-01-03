<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class PlayController extends AppController
{
    public function index()
    {
        $this->loadModel('Articles');
        $articles = $this->Articles->getArticles();

        $this->set(compact('articles'));
        $this->set('page','play');
        $this->render('/Pages/home');
    }
}