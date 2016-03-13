<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTableWithDefaultValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * SQL statement execution example
         */
        \DB::statement("
            CREATE TABLE `colors`(
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(100) NOT NULL,
                PRIMARY KEY(`id`)
            )
            ENGINE=InnoDB;
        ");
        \DB::statement("
            INSERT INTO `colors`(`name`) values('red'),('blue'),('black');
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP TABLE `colors`;");
    }
}
