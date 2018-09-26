<?php

use Cake\Database\Expression\QueryExpression;
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
        $builder = $this->getQueryBuilder();
        $builder
            ->update('products')
            ->set(new QueryExpression('`price` = `price` + 10'))
            ->where(
                function (QueryExpression $exp) {
                    return $exp->lt('price', 100);
                }
            )
            ->execute();

//        $builder = $this->getQueryBuilder();
//        $builder
//            ->update('products')
//            ->set('price', 60)
//            ->where(
//                function (QueryExpression $exp) {
//                    return $exp->eq('price', 50);
//                }
//            )
//            ->execute();
//        $builder = $this->getQueryBuilder();
//        $builder
//            ->update('products')
//            ->set('price', 80)
//            ->where(
//                function (QueryExpression $exp) {
//                    return $exp->eq('price', 70);
//                }
//            )
//            ->execute();

        //$this->execute('UPDATE `products` SET `price` = `price` + 10 WHERE (`price` < 100);');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        /**
         * Update example
         */
        $builder = $this->getQueryBuilder();
        $builder
            ->update('products')
            ->set(new QueryExpression('`price` = `price` - 10'))
            ->where(
                function (QueryExpression $exp) {
                    return $exp->lt('price', 110);
                }
            )
            ->execute();
//        $this->execute('UPDATE `products` SET `price` = `price` - 10 WHERE (`price` < 110);');
    }
}
