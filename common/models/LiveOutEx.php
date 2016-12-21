<?php

namespace common\models;


use Yii;

/**
 * This is the model class for table "lo_ex".
 *
 * @property integer $id
 * @property integer $view_order
 * @property integer $private
 * @property string $ex_name
 * @property string $ex_description
 * @property integer $ex_level
 * @property string $ex_duration
 * @property integer $ex_cat_id
 * @property string $warn
 * @property string $thanx
 */
class LiveOutEx extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lo_ex';
    }

    public function getSteps()
    {
        return $this->hasMany(LiveOutSteps::className(),['exercise_id'=>'id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'ex_cat_id']);
    }

    public function rules()
    {
        return [
            [['view_order', 'private', 'ex_name', 'ex_description', 'ex_level', 'ex_cat_id'], 'required'],
            [['view_order', 'private', 'ex_level', 'ex_cat_id'], 'integer'],
            [['ex_name', 'ex_description', 'warn', 'thanx'], 'string'],
            [['ex_duration'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'view_order' => 'В списке',
            'private' => 'Доступ',
            'ex_name' => 'Название',
            'ex_description' => 'Описание',
            'ex_level' => 'Сложность',
            'ex_duration' => 'Продолжительность',
            'ex_cat_id' => 'Категория',
            'warn' => 'Предупреждение',
            'thanx' => 'Спасибо',
        ];
    }
}
