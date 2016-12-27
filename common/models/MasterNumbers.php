<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "master_numbers".
 *
 * @property integer $id
 * @property integer $master_id
 * @property integer $order_num
 * @property integer $number
 * @property string $discription
 */
class MasterNumbers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_numbers';
    }

    public function getMaster()
    {
        return $this->hasOne(Masters::className(),['id'=>'master_id']);
    }
    public function rules()
    {
        return [
            [['master_id', 'order_num', 'number', 'discription'], 'required'],
            [['master_id', 'order_num', 'number'], 'integer'],
            [['discription'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Master ID',
            'order_num' => 'Order Num',
            'number' => 'Number',
            'discription' => 'Discription',
        ];
    }
}
