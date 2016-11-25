<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class LiveOut extends ActiveRecord
{
    public static function tableName()
    {
        return 'lo_list';
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'ex_cat_id']);
    }
    public function getSteps()
    {
        return $this->hasMany(LiveOutSteps::className(),['exercise_id'=>'id']);
    }
}