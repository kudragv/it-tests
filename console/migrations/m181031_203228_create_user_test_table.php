<?php

use yii\db\Migration;


class m181031_203228_create_user_test_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('user_test', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'test_id' => $this->integer()->notNull(),
        ]);
    }


    public function safeDown()
    {
        $this->dropTable('user_test');
    }
}
