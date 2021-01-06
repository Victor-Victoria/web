<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m210101_200614_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'productId' => $this->integer()->notNull()->comment('Продукт'),
            'userId' => $this->integer()->notNull()->comment('Пользователь'),
            'price' => $this->float()->comment('Сумма заказа'),
            'createdAt' => $this->dateTime()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_orders_productId', '{{%orders}}', 'productId', '{{%products}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_orders_userId', '{{%orders}}', 'userId', '{{%users}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_orders_productId', '{{%orders}}');
        $this->dropForeignKey('fk_orders_userId', '{{%orders}}');
        $this->dropTable('{{%orders}}');
    }
}
