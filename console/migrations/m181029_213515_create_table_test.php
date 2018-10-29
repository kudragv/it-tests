<?php

use yii\db\Migration;


class m181029_213515_create_table_test extends Migration
{
    public function up()
    {
        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->unique(),
            'title' => $this->string(20)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('test');
    }
}
