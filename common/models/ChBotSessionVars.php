<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ch_bot_session_vars".
 *
 * @property int $id
 * @property int $session_id
 * @property int $item_var_id
 * @property string $question
 * @property string $value
 * @property string $status
 * @property int $created_at
 */
class ChBotSessionVars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_session_vars';
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
            [['session_id', 'item_var_id', 'created_at'], 'integer'],
            [['question', 'value'], 'string', 'max' => 510],
            [['status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'session_id' => 'Session ID',
            'item_var_id' => 'Item Var ID',
            'question' => 'Question',
            'value' => 'Value',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
