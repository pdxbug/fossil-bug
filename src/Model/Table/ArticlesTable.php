<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function getArticles()
    {
        $query = $this->find('all',[
            'conditions' => [
                'published' => 1
            ]
        ]);
        $articles = $query->all();

        return $articles;
    }
}
