<?php

use Illuminate\Database\Migrations\Migration;

class ProductsInsertDefaultProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
        \DB::table('products')->insert($products);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::table('products')->truncate();
    }
}
