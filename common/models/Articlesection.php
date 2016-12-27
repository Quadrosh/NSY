<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articlesection".
 *
 * @property integer $id
 * @property integer $page_id
 * @property integer $num
 * @property string $head
 * @property string $text
 * @property string $extra
 * @property string $stylekey
 * @property string $arrange
 * @property string $image
 * @property string $image_alt
 * @property string $promolink
 * @property string $promoname
 */
class Articlesection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articlesection';
    }

    public function getArticle()
    {
        return $this->hasOne(Articles::className(), ['id'=>'page_id']);
    }
    public function rules()
    {
        return [
            [['page_id', 'num',  'text', 'arrange'], 'required'],
            [['page_id', 'num'], 'integer'],
            [['text', 'extra'], 'string'],
            [['head', 'stylekey', 'image', 'image_alt', 'promolink', 'promoname'], 'string', 'max' => 255],
            [['arrange'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'num' => 'Num',
            'head' => 'Head',
            'text' => 'Text',
            'extra' => 'Extra',
            'stylekey' => 'Stylekey',
            'arrange' => 'Arrange',
            'image' => 'Image',
            'image_alt' => 'Image Alt',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
        ];
    }
}
