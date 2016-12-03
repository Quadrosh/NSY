<?php


namespace common\models;


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
    public function getMBoxes()
    {
        return $this->hasMany(MBox::className(),['motivator_id'=>'id']);
    }
    public function getMLines()
    {
        return $this->hasMany(MLine::className(),['motivator_id'=>'id']);
    }
    public function rules()
    {
        return [
            [[ 'id', 'list_section', 'list_name',  'cat_id', 'position', 'list_num','title', 'description', 'keywords'], 'required'],
            [['description','keywords'], 'string'],
            [['list_name', 'hrurl', 'title','description','keywords','pagehead','section_name','section_color','background','imagelink','imagelink_alt','sendtopage','promolink','promoname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID (0=AUTO)',
            'list_section' => 'List Section',
            'list_name' => 'List Name',
            'list_num' => 'List №',
            'hrurl' => 'Человекопонятная ссылка',
            'title' => 'Meta Title',
            'description' => 'Meta Description',
            'keywords' => 'Meta Keywords',
            'pagehead' => 'Page Head',
            'position' => 'Позиция читателя',
            'cat_id' => 'Категория',
            'section_name' => 'Section ID',
            'section_color' => 'Section Color Key',
            'background' => 'Background Image',
            'imagelink' => 'Ссылка на картинку (поделиться)',
            'imagelink_alt' => 'ImageLink Alt',
            'sendtopage' => 'SendToPage',
            'promolink' => 'PromoLink',
            'promoname' => 'PromoName',
        ];
    }
}