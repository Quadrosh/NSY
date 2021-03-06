<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "training_why".
 *
 * @property integer $id
 * @property integer $training_id
 * @property string $text
 */
class TrainingWhy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'training_why';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_id', 'text'], 'required'],
            [['training_id', 'order_num'], 'integer'],
            [['text', 'direction'], 'string'],
            [[ 'direction'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'training_id' => 'Training ID',
            'order_num' => 'List Order №',
            'text' => 'Text',
        ];
    }
}
