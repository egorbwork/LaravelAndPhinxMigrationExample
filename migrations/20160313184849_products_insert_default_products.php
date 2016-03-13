<?php

use Phinx\Migration\AbstractMigration;

class ProductsInsertDefaultProducts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        /**
         * Insert example
         */
        $products = [
            [
                "name" => "Product nr.1",
                "description" => "First Product",
                "price" => 50
            ],
            [
                "name" => "Product nr.2",
                "description" => "Second Product",
                "price" => 70
            ],
            [
                "name" => "Product nr.3",
                "description" => "Third Product",
                "price" => 110
            ]
        ];
        $this->insert('products', $products);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DELETE FROM products');
    }
}
