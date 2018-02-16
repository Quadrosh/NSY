<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "b2b_bot_user".
 *
 * @property int $id
 * @property int $telegram_user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $b2b_name
 * @property string $email
 * @property string $phone
 * @property string $status
 * @property int $updated_at
 * @property int $created_at
 */
class B2bBotUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b2b_bot_user';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
//                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['telegram_user_id'], 'required'],
            [['telegram_user_id', 'updated_at', 'created_at'], 'integer'],
            [['first_name', 'last_name', 'username', 'b2b_name', 'email', 'phone', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'telegram_user_id' => 'Telegram User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'b2b_name' => 'B2b Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
