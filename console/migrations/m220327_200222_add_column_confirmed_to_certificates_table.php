<?php

use yii\db\Migration;

/**
 * Class m220327_200222_add_column_confirmed_to_certificates_table
 */
class m220327_200222_add_column_confirmed_to_certificates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%certificates}}','confirmed',$this->boolean()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%certificates}}','confirmed');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220327_200222_add_column_confirmed_to_certificates_table cannot be reverted.\n";

        return false;
    }
    */
}
