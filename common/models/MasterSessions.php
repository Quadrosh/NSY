<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "master_sessions".
 *
 * @property integer $id
 * @property integer $master_id
 * @property string $name
 * @property string $discription
 * @property string $form_1
 * @property integer $price_1
 * @property string $currency_1
 * @property string $form_2
 * @property integer $price_2
 * @property string $currency_2
 * @property string $cta_name
 * @property string $cta_link
 */
class MasterSessions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_sessions';
    }

    public function getMaster()
    {
        return $this->hasOne(Masters::className(),['id'=>'master_id']);
    }
    public function rules()
    {
        return [
            [['master_id', 'name', 'discription'], 'required'],
            [['master_id', 'price_1', 'price_2'], 'integer'],
            [['discription'], 'string'],
            [['name', 'form_1', 'form_2', 'cta_name', 'cta_link'], 'string', 'max' => 255],
            [['currency_1', 'currency_2'], 'string', 'max' => 10],
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
            'name' => 'Name',
            'discription' => 'Discription',
            'form_1' => 'Form 1',
            'price_1' => 'Price 1',
            'currency_1' => 'Currency 1',
            'form_2' => 'Form 2',
            'price_2' => 'Price 2',
            'currency_2' => 'Currency 2',
            'cta_name' => 'Cta Name',
            'cta_link' => 'Cta Link',
        ];
    }
}
