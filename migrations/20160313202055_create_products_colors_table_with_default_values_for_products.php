<?php

use Phinx\Migration\AbstractMigration;

class CreateProductsColorsTableWithDefaultValuesForProducts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('products_colors', array('id' => false));
        $table->addColumn('product_id', 'integer', array("limit" => 10))
              ->addColumn('color_id', 'integer', array("limit" => 11))
              ->addForeignKey('product_id', 'products', 'id', array('delete'=> 'CASCADE', 'update'=> 'CASCADE'))
              ->addForeignKey('color_id', 'colors', 'id', array('delete'=> 'CASCADE', 'update'=> 'CASCADE'))
              ->save();
        /*
         * Select example
         */
        $blackColorId = $this->fetchRow("SELECT `id` FROM `colors` WHERE `name` = 'black';")["id"];
        $productsIds = $this->fetchAll("SELECT `id` FROM `products`");
        $productsColorsDefaultRows = [];
        foreach ($productsIds as $productId) {
            $productsColorsDefaultRows[] = [
                "product_id" => $productId["id"],
                "color_id" => $blackColorId,
            ];
        }
        $table->insert($productsColorsDefaultRows);
        $table->saveData();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('products_colors');
        $table->drop();
    }
}
