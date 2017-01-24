<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quotepad".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $list_name
 * @property string $list_image
 * @property string $text
 * @property string $author
 * @property string $whois
 * @property string $lifetime
 * @property string $imagelink
 * @property string $imagelink_alt
 * @property string $sendtopage
 * @property string $promolink
 * @property string $promoname
 * @property string $background_color
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $image5
 * @property string $view
 */
class Quotepad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quotepad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'keywords', 'text', 'author', 'whois', 'lifetime', 'sendtopage', 'promolink', 'promoname', 'background_color', 'view'], 'required'],
            [['description', 'keywords', 'text'], 'string'],
            [['text1','text2','text3','text4','text4','title', 'author_avatar_alt','author_avatar','list_name', 'list_image', 'author', 'whois', 'lifetime', 'imagelink', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname', 'background_color',  'view'], 'string', 'max' => 255],
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
            'author_avatar' => 'Author Avatar',
            'author_avatar_alt' => 'Author Avatar Alt',
            'keywords' => 'Keywords',
            'list_name' => 'List Name',
            'list_image' => 'List Image',
            'text' => 'Text',
            'text1' => 'Text 1',
            'text2' => 'Text 2',
            'text3' => 'Text 3',
            'text4' => 'Text 4',
            'author' => 'Author',
            'whois' => 'Whois',
            'lifetime' => 'Lifetime',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
            'background_color' => 'Background Color',

            'view' => 'View',
        ];
    }
}
