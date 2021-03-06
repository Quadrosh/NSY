<?php

namespace common\models;


use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getMotivators()
    {
        return $this->hasMany(Motivator::className(), ['cat_id' => 'id']);
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['cat_id' => 'id']);
    }

    /**
     * получаем родителя
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id'=>'parent_id']);
    }
    /**
     * получаем проживания
     */
    public function getXex()
    {
        return $this->hasMany(LiveOutEx::className(),['ex_cat_id'=>'id']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * Имена
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'parent_id' => 'Родительская категория',
            'name' => 'Название',
            'keywords' => 'Мета ключевые слова',
            'description' => 'Мета описание',
        ];
    }
}
