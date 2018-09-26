<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsColorsTableWithDefaultValuesForProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_colors', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->integer('color_id');
            $table->foreign('product_id', 'fk_products_for_colors')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('color_id', 'fk_colors_for_products')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
        });
        /*
         * Select example
         */
        $blackColorId = \DB::table('colors')->where('name', '=', 'black')->value('id');
        $productsIds = \DB::table('products')->get(['id']);
        $productsColorsDefaultRows = [];
        foreach ($productsIds as $productId) {
            $productsColorsDefaultRows[] = [
                'product_id' => $productId->id,
                'color_id' => $blackColorId,
            ];
        }
        \DB::table('products_colors')->insert($productsColorsDefaultRows);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_colors');
    }
}
