<?php

use Phinx\Migration\AbstractMigration;

class AddTableArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // create the table
        $table = $this->table('articles',
            ['collation'=>'utf8mb4_unicode_ci']
        );
        $table->addColumn('user_id', 'char', ['limit' => 36])
              ->addColumn('title', 'char', ['limit' => 255, 'null' => false])
              ->addColumn('slug', 'char', ['limit' => 191, 'null' => false])
              ->addColumn('body', 'text')
              ->addColumn('published', 'boolean', ['null' => false, 'default' => false])
              ->addColumn('created', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('modified', 'datetime')
              ->addIndex('slug', ['unique' => true])
              ->create();
    }

    public function up()
    {
        $table = $this->table('articles');
        $table->addForeignKey('user_id', 'users', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION']);
    }
}
