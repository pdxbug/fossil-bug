<?php
// src/Controller/MyController.php

namespace App\Controller;

class MyControllerController extends AppController
{
    public function sitemap(){
       $this->viewBuilder()->layout('sitemap');
       $this->RequestHandler->respondAs('xml');
       //todo: when have blog set up, use https://trinitytuts.com/tips/create-xml-sitemap-cakephp-3/ to update xml on pages/blog/categories
       // $categories = $this->Categories->find('all', array('conditions'=>array('status'=>1)));
       // $pages = $this->Pages->find('all', array('conditions'=>array('status'=>1)));
       $this->set(compact('categories', 'pages'));
    }
}