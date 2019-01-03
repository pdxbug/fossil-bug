<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class LifeController extends AppController
{
    public function index()
    {
        $this->loadModel('Articles');
        $articles = $this->Articles->getArticles();

        $this->set(compact('articles'));
        $this->set('page','life');
        $this->render('/Pages/home');
    }
}