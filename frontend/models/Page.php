<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pages".
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
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'keywords'], 'required'],
            [['description', 'pagedescription','keywords'], 'string'],
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
            'title' => 'Meta Title',
            'description' => 'Meta Description',
            'keywords' => 'Meta Keywords',
            'pagehead' => 'Название на странице',
            'pagedescription' => 'Описание на странице',
            'imagelink' => 'Ссылка на картинку (поделиться)',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
        ];
    }
}
