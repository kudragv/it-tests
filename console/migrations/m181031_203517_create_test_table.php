<?php

use yii\db\Migration;


class m181031_203517_create_test_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string(50)->notNull()->unique(),
        ]);


    }

    public function safeDown()
    {
        $this->dropTable('test');
    }
}
