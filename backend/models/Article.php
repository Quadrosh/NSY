<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $list_name
 * @property integer $list_num
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $text
 * @property string $pagehead
 * @property integer $cat_id
 * @property string $topimage
 * @property string $promolink
 * @property string $promoname
 * @property string $imagelink
 * @property string $imagelink_alt
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['list_name', 'list_num', 'title', 'description', 'keywords', 'text', 'pagehead', 'cat_id', 'promolink', 'promoname', 'imagelink', 'imagelink_alt'], 'required'],
            [['list_num', 'cat_id'], 'integer'],
            [['description', 'keywords', 'text'], 'string'],
            [['list_name', 'title', 'pagehead', 'topimage', 'promolink', 'promoname', 'imagelink', 'imagelink_alt'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'list_name' => 'List Name',
            'list_num' => 'List Num',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'text' => 'Text',
            'pagehead' => 'Pagehead',
            'cat_id' => 'Cat ID',
            'topimage' => 'Topimage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
        ];
    }
}
