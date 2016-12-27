<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "professions".
 *
 * @property integer $id
 * @property integer $master_id
 * @property string $name
 * @property string $start_date
 */
class Professions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'professions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['master_id', 'name'], 'required'],
            [['master_id'], 'integer'],
            [['start_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function getMaster()
    {
        return $this->hasOne(Masters::className(),['id'=>'master_id']);
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Master ID',
            'name' => 'Name',
            'start_date' => 'Start Date',
        ];
    }
}
