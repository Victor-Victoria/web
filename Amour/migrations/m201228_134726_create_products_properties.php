<?php

use yii\db\Migration;

/**
 * Class m201228_134726_create_products_properties
 */
class m201228_134726_create_products_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products_properties}}', [
            'id' => $this->primaryKey(),
            'productId' => $this->integer()->notNull()->comment('Товар'),
            'propertyId' => $this->integer()->notNull()->comment('Свойство'),
            'value' => $this->text()->notNull()->comment('Значение'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);

        $this->addForeignKey('fk_products_properties_productId', '{{%products_properties}}', 'productId', '{{%products}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_products_properties_propertyId', '{{%products_properties}}', 'propertyId', '{{%properties}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_products_properties_productId', '{{%products_properties}}');
        $this->dropForeignKey('fk_products_properties_propertyId', '{{%products_properties}}');
        $this->dropTable('{{%products_properties}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201228_134726_create_products_properties cannot be reverted.\n";

        return false;
    }
    */
}
