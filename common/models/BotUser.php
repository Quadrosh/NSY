<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "bot_user".
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $language_code
 * @property int $updated_at
 * @property int $created_at
 */
class BotUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bot_user';
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
            [['user_id', 'updated_at', 'created_at'], 'integer'],
            [['username'], 'required'],
            [['first_name', 'last_name', 'username', 'language_code'], 'string', 'max' => 255],
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'language_code' => 'Language Code',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }


    public function getPermissions()
    {
        return $this->hasMany(BotUserPermission::className(),['user_id'=>'id']);
    }

    public function hasPermission($short)
    {
        if (BotUserPermission::find()->where(['short'=>$short,'user_id'=>$this['id']])->one()) {
            return true;
        } else {
            return false;
        }
    }

    public function addPermission($short)
    {
        if (BotUserPermission::find()->where(['short'=>$short,'user_id'=>$this['id']])->one()) {
            return true;
        } else {
            $permission = new BotUserPermission();
            $permission['user_id'] = $this['id'];
            $permission['short'] = $short;
            if ($permission->save()) {
                return true;
            } else {
                return false;
            }
        }
    }
}
