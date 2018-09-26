<?php

use Phinx\Migration\AbstractMigration;

class CreateColorsTableWithDefaultValues extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        /**
         * SQL statement execution example
         */
        $this->execute('
            CREATE TABLE `colors`(
                `id` INT(11) NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(100) NOT NULL,
                PRIMARY KEY(`id`)
            )
            ENGINE=InnoDB;
        ');
        $this->execute("
            INSERT INTO `colors`(`name`) values('red'),('blue'),('black');
        ");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('DROP TABLE `colors`;');
    }
}
