<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "happypage".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $pagehead
 * @property string $pagedescription
 * @property string $imagelink
 * @property string $imagelink_alt
 * @property string $sendtopage
 * @property string $promolink
 * @property string $promoname
 */
class Happypage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'happypage';
    }

    public function getSections()
    {
        return $this->hasMany(Happysection::className(), ['page_id'=>'id']);
    }

    public function rules()
    {
        return [
            [['title', 'description', 'keywords'], 'required'],
            [['description', 'keywords', 'pagedescription'], 'string'],
            [['title', 'pagehead', 'imagelink', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'pagehead' => 'H1 Pagehead',
            'pagedescription' => 'Page Description',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
        ];
    }
}
