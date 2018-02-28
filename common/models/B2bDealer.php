<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b2b_dealer".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $status
 * @property int $updated_at
 * @property int $created_at
 */
class B2bDealer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b2b_dealer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updated_at', 'created_at'], 'integer'],
            [['name', 'email', 'phone', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
