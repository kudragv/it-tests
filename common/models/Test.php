<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property string $id
 * @property string $title
 *
 * @property Question[] $questions
 */
class Test extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'test';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 50],
            [['title'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public function getQuestions()
    {
        return $this->hasMany(Question::className(), ['test_id' => 'id']);
    }
}
