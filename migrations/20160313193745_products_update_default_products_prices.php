<?php

use Phinx\Migration\AbstractMigration;

class ProductsUpdateDefaultProductsPrices extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        /**
         * Update example
         */
        $this->execute("UPDATE `products` SET `price` = `price` + 10 WHERE (`price` < 100);");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        /**
         * Update example
         */
        $this->execute("UPDATE `products` SET `price` = `price` - 10 WHERE (`price` < 110);");
    }
}
