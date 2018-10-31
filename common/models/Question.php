<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property string $id
 * @property string $text
 * @property string $test_id
 *
 * @property Test $test
 */
class Question extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'question';
    }

     public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
            [['test_id'], 'integer'],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => Test::className(), 'targetAttribute' => ['test_id' => 'id']],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'test_id' => 'Test ID',
        ];
    }

    public function getTest()
    {
        return $this->hasOne(Test::className(), ['id' => 'test_id']);
    }
}
