<?php

use Phinx\Migration\AbstractMigration;

class AlterProductsAddColumnTechDetails extends AbstractMigration
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
         * Add Column example using change method
         */
        $table = $this->table('products');
        $table->addColumn('tech_details', 'string', ['length' => 100]);
        $table->update();
    }
    
//    /**
//     * Migrate Up.
//     */
//    public function up()
//    {
//        /**
//         * Add Column example using up method
//         */
//        $table = $this->table('products');
//        $table->addColumn('tech_details', 'string', ['length' => 100]);
//        $table->save();
//    }
//
//    /**
//     * Migrate Down.
//     */
//    public function down()
//    {
//        /**
//         * Drop Column example using down method
//         */
//        $table = $this->table('products');
//        $table->removeColumn('tech_details');
//        $table->save();
//    }
}
