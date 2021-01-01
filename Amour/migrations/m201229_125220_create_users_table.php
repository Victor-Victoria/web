<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m201229_125220_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()->comment('Имя пользователя'),
            'email' => $this->string(100)->comment('Электронная почта'),
            'password' => $this->string(50)->notNull()->comment('Пароль'),
            'createdAt' => $this->dateTime()->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->comment('Дата изменения')

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
