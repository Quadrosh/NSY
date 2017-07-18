<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "popular".
 *
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $image
 * @property string $link
 * @property integer $count
 * @property string $comment
 * @property string $date
 */
class Popular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'popular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link', 'count'], 'required'],
            [['count'], 'integer'],
            [['type', 'name', 'image', 'link', 'comment', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'image' => 'Image',
            'link' => 'Link',
            'count' => 'Count',
            'comment' => 'Comment',
            'date' => 'Date',
        ];
    }
}
