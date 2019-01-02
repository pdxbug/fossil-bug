<?php

use Phinx\Migration\AbstractMigration;

class AddTableTags extends AbstractMigration
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
        $table = $this->table('tags',
            ['collation'=>'utf8mb4_unicode_ci']
        );
        $table->addColumn('title', 'char', ['limit' => 191, 'null' => false])
              ->addColumn('created', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('modified', 'datetime')
              ->addIndex('title', ['unique' => true])
              ->create();

        $table = $this->table('article_tags',
            ['collation'=>'utf8mb4_unicode_ci']
        );
        $table->addColumn('article_id', 'integer', ['null' => false])
              ->addColumn('tag_id', 'integer', ['null' => false])
              ->addColumn('created', 'datetime', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('modified', 'datetime')
              ->addIndex(['article_id', 'tag_id'])
              ->create();
    }

    public function up()
    {
        $table = $this->table('article_tags');
        $table->addForeignKey('article_id', 'articles', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
              ->addForeignKey('user_id', 'users', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
              ->save();
    }
}
