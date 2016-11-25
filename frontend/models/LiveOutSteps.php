<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class LiveOutSteps extends ActiveRecord
{
    public static function tableName()
    {
        return 'lo_steps';
    }
    public function getLiveOut()
    {
        return $this->hasOne(LiveOut::className(),['id'=>'exercise_id']);
    }
}