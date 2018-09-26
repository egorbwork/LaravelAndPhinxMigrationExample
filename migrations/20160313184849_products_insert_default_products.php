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
                'name' => 'Product nr.1',
                'description' => 'First Product',
                'price' => 50,
                'technical_details' => 'First Product technical details'
            ],
            [
                'name' => 'Product nr.2',
                'description' => 'Second Product',
                'price' => 70,
                'technical_details' => 'Second Product technical details'
            ],
            [
                'name' => 'Product nr.3',
                'description' => 'Third Product',
                'price' => 110,
                'technical_details' => 'Third Product technical details'
            ]
        ];
        $this->table('products')->insert($products)->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->table('products')->truncate();
        //$this->execute('DELETE FROM products');
    }
}
