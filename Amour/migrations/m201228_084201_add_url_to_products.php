<?php

use yii\db\Migration;

/**
 * Class m201228_084201_add_url_to_products
 */
class m201228_084201_add_url_to_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'url', $this->string(128)->notNull()->comment('URL'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m201228_084201_add_url_to_products cannot be reverted.\n";
        $this->dropColumn('{{%products}}', 'url');
        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201228_084201_add_url_to_products cannot be reverted.\n";

        return false;
    }
    */
}
