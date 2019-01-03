<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class WorkController extends AppController
{
    public function index()
    {
        $this->loadModel('Articles');
        $articles = $this->Articles->getArticles();

        $this->set(compact('articles'));
        $this->set('page','work');
        $this->render('/Pages/home');
    }
}