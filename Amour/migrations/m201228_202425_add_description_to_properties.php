<?php

use yii\db\Migration;

/**
 * Class m201228_202425_add_description_to_properties
 */
class m201228_202425_add_description_to_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%properties}}', 'description', $this->string(255)->notNull()->comment('Описание'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%properties}}', 'description');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201228_202425_add_description_to_properties cannot be reverted.\n";

        return false;
    }
    */
}
