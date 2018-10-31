<?php

use yii\db\Migration;

/**
 * Class m181031_210438_add_fk_test_question
 */
class m181031_210438_add_fk_test_question extends Migration
{

    public function safeUp()
    {
        $this->addForeignKey(
            'fk_question_test_id',
            'question',
            'test_id',
            'test',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_question_test_id',
            'question'
        );
    }
}
