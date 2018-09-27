<?php

use Cake\Database\Expression\QueryExpression;
use Phinx\Migration\AbstractMigration;

class CreateProductsColorsTableWithDefaultValuesForProducts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('products_colors', ['id' => false]);
        $table->addColumn('product_id', 'integer', ['limit' => 10])
            ->addColumn('color_id', 'integer', ['limit' => 11])
            ->addForeignKey('product_id', 'products', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('color_id', 'colors', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->save();

        /*
         * Select example with QueryBuilder
         */
        $builder = $this->getQueryBuilder();
        $blackColorId = $builder
            ->select(['id' => 'id'])
            ->from('colors')
            ->where(
                function (QueryExpression $exp) {
                    return $exp->eq('name', 'black', ['name' => 'string']);
                }
            )
            ->execute()->fetch('assoc')['id'];
        $builder = $this->getQueryBuilder();
        $productsIds = $builder
            ->select(['id'])
            ->from('products')
            ->execute()->fetchAll('assoc');

        $builder = $this->getQueryBuilder();
        $builder
            ->insert(['product_id', 'color_id'])
            ->into('products_colors');
        foreach ($productsIds as $productId) {
            $builder->values(['product_id' => $productId['id'], 'color_id' => $blackColorId]);
        }
        $builder->execute();
        /*
         * Select example
         */
//        $blackColorId = $this->fetchRow("SELECT `id` FROM `colors` WHERE `name` = 'black';")['id'];
//        $productsIds = $this->fetchAll('SELECT `id` FROM `products`');
//        $productsColorsDefaultRows = [];
//        foreach ($productsIds as $productId) {
//            $productsColorsDefaultRows[] = [
//                'product_id' => $productId['id'],
//                'color_id' => $blackColorId,
//            ];
//        }
//        $table->insert($productsColorsDefaultRows);
//        $table->saveData();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('products_colors');
        $table->drop()->save();
    }
}
