<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ch_bot_play_vars".
 *
 * @property int $id
 * @property int $play_id
 * @property string $question
 * @property string $example
 * @property string $value
 * @property int $created_at
 */
class ChBotPlayVars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_play_vars';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['play_id', 'created_at'], 'integer'],
            [['question', 'value'], 'string', 'max' => 510],
            [['question'], 'required'],
            [['example'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'play_id' => 'Play ID',
            'question' => 'Question',
            'example' => 'Example',
            'value' => 'Value',
            'created_at' => 'Created At',
        ];
    }
}
