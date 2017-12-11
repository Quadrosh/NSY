<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ch_bot_session".
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property string $item_type
 * @property string $description
 * @property string $user_response
 * @property int $created_at
 */
class ChBotSession extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_session';
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
            [['user_id', 'item_id', 'created_at'], 'integer'],
            [['item_type', ], 'required'],
            [['description', 'user_response'], 'string'],
            [['item_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'item_id' => 'Item ID',
            'item_type' => 'Item Type',
            'description' => 'Description',
            'user_response' => 'User Response',
            'created_at' => 'Created At',
        ];
    }
    /**
     *
     */
    public function getVars()
    {
        return $this->hasMany(ChBotSessionVars::className(),['id'=>'session_id']);
    }

}
