<?php

use Phinx\Migration\AbstractMigration;

class AlterProductsChangeColumnTechDetails extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        /**
         * Change and Rename Column example
         */
        $table = $this->table('products');
        $table->changeColumn('tech_details', 'string', ['limit' => 255]);
        $table->save();
        $table->renameColumn('tech_details', 'technical_details');
        $table->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('products');
        $table->changeColumn('technical_details', 'string', ['limit' => 100]);
        $table->save();
        $table->renameColumn('technical_details', 'tech_details');
        $table->save();
    }
}
