<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class Motivator extends ActiveRecord
{
    public static function tableName()
    {
        return 'motivators';
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'cat_id']);
    }
}