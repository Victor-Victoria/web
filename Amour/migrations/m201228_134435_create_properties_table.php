<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%properties}}`.
 */
class m201228_134435_create_properties_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%properties}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->comment('Наименование'),
            'createdAt' => $this->dateTime()->notNull()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%properties}}');
    }
}
