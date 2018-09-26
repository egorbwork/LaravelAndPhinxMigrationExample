<?php

use Phinx\Migration\AbstractMigration;

class CreateProductsTable extends AbstractMigration
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
        /**
         * Create Table example using change method
         */
        $table = $this->table('products');
        $table->addColumn('name', 'string')
              ->addColumn('description', 'string', ['null' => true])
              ->addColumn('price', 'decimal')
              ->addColumn('created_at', 'timestamp', ['null' => true])
              ->addColumn('updated_at', 'timestamp', ['null' => true])
              ->create();
    }
    
//    /**
//     * Migrate Up.
//     */
//    public function up()
//    {
//        /**
//         * Create Table example using up method
//         */
//        $table = $this->table('products');
//        $table->addColumn('name', 'string')
//              ->addColumn('description', 'string', ['null' => true])
//              ->addColumn('price', 'decimal')
//              ->addColumn('created_at', 'timestamp', ['null' => true])
//              ->addColumn('updated_at', 'timestamp', ['null' => true])
//              ->save();
//    }
//
//    /**
//     * Migrate Down.
//     */
//    public function down()
//    {
//        /**
//         * Drop Table example using down method
//         */
//        $this->dropTable('products');
//    }
    
    
}
