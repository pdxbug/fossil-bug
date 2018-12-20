<?php
// src/Model/Table/QuotesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class QuotesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
