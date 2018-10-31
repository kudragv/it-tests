<?php

use yii\db\Migration;


class m181031_210123_create_question_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey()->unsigned(),
            'text' => $this->text()->notNull(),
            'test_id' => $this->integer()->unsigned(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('question');
    }
}
