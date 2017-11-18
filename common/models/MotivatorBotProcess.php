<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "motivator_bot_process".
 *
 * @property int $id
 * @property int $chat_id
 * @property string $first_name
 * @property int $chat_date
 * @property string $command
 * @property int $motivator_id
 * @property int $steps_qnt
 * @property int $current_step
 * @property int $block_qnt
 * @property int $current_block
 * @property int $mline_id
 * @property string $text
 * @property int $start_time
 * @property int $created_at
 */
class MotivatorBotProcess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motivator_bot_process';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
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
            [['chat_id', 'chat_date', 'motivator_id', 'steps_qnt', 'current_step', 'block_qnt', 'current_block', 'mline_id', 'start_time', 'created_at'], 'integer'],
            [['text'], 'string'],
            [['first_name', 'command'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chat_id' => 'Chat ID',
            'first_name' => 'First Name',
            'chat_date' => 'Chat Date',
            'command' => 'Command',
            'motivator_id' => 'Motivator ID',
            'steps_qnt' => 'Steps Qnt',
            'current_step' => 'Current Step',
            'block_qnt' => 'Block Qnt',
            'current_block' => 'Current Block',
            'mline_id' => 'Mline ID',
            'text' => 'Text',
            'start_time' => 'Start Time',
            'created_at' => 'Created At',
        ];
    }
}
