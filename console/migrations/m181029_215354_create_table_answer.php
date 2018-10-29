<?php

use yii\db\Migration;


class m181029_215354_create_table_answer extends Migration
{
    public function up()
    {
        $this->createTable('answer', [
            'id' => $this->primaryKey(),
            'question_id' => $this->integer()->notNull()->unique(),
            'value' => $this->text()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('answer');
    }

}