<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsChangeColumnTechDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Change and Rename Column example
         */
        Schema::table("products", function (Blueprint $table) {
            $table->renameColumn("tech_details", "technical_details");
        });
        Schema::table("products", function (Blueprint $table) {
            $table->string("technical_details", 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("products", function (Blueprint $table) {
            $table->renameColumn("technical_details", "tech_details");
        });
        Schema::table("products", function (Blueprint $table) {
            $table->string("tech_details", 100)->change();
        });
    }
}
