<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProductsAddColumnTechDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Add Column example
         */
        Schema::table("products", function (Blueprint $table) {
            $table->addColumn("string", "tech_details", array("length" => 100));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /**
         * Drop Column example
         */
        Schema::table("products", function (Blueprint $table) {
            $table->dropColumn("tech_details");
        });
    }
}
