<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ch_bot_phrase_vars".
 *
 * @property int $id
 * @property int $play_id
 * @property string $question
 * @property string $example
 * @property int $created_at
 */
class ChBotPhraseVars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_phrase_vars';
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
            [['question'], 'string', 'max' => 510],
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
            'created_at' => 'Created At',
        ];
    }
}
