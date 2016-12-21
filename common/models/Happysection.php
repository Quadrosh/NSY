<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "happysection".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $head
 * @property string $image
 * @property string $image_alt
 * @property string $text
 * @property string $extra
 * @property string $arrange
 */
class Happysection extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'happysection';
    }

    public function getPage()
    {
        return $this->hasOne(Happypage::className(), ['id'=>'page_id']);
    }

    public function rules()
    {
        return [
            [['page_id', 'text', 'arrange'], 'required'],
            [['page_id'], 'integer'],
            [['text', 'extra'], 'string'],
            [['head', 'image', 'image_alt'], 'string', 'max' => 255],
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
            'page_id' => 'Page',
            'head' => 'Head',
            'image' => 'Image',
            'image_alt' => 'Image Alt',
            'text' => 'Text',
            'extra' => 'Extra',
            'arrange' => 'Arrange',
        ];
    }
}
