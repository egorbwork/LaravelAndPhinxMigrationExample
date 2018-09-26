<?php

use Illuminate\Database\Migrations\Migration;

class ProductsUpdateDefaultProductsPrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Update example
         */
        \DB::table('products')->where('price', '<', 100)->increment('price', 10);
//        /*
//         * Using only update method
//         */
//        \DB::table('products')->where('price', '=', 50)->update(['price' => 60]);
//        \DB::table('products')->where('price', '=', 70)->update(['price' => 80]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /**
         * Update example
         */
        \DB::table('products')->where('price', '<', 110)->decrement('price', 10);
//        /*
//         * Using only update method
//         */
//        \DB::table('products')->where('price', '=', 80)->update(['price' => 70]);
//        \DB::table('products')->where('price', '=', 60)->update(['price' => 50]);
    }
}
