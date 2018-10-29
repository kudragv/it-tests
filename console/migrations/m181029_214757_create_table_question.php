<?php

use yii\db\Migration;


class m181029_214757_create_table_question extends Migration
{
    public function up()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey(),
            'test_id' => $this->integer()->notNull()->unique(),
            'value' => $this->text()->notNull(),
            'type' => $this->integer()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('question');
    }

}