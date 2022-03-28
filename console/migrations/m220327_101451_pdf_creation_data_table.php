<?php

use yii\db\Migration;

/**
 * Class m220327_101451_pdf_creation_data_table
 */
class m220327_101451_pdf_creation_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%certificates}}', [
            'id' => $this->primaryKey()->unsigned(),
            'course_name' => $this->string(255)->notNull(),
            'student_name' => $this->string(255)->notNull(),
            'date_course_finished' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%certificates}}');
    }

}
