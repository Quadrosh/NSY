<?php


namespace frontend\models;
use yii\db\ActiveRecord;

class SunMenu extends ActiveRecord
{
    public static function tableName()
    {
        return 'sunmenu';
    }
}