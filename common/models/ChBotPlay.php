<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ch_bot_play".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $cat_id
 * @property string $text
 * @property int $created_at
 * @property int $updated_at
 */
class ChBotPlay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_play';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'text'], 'string'],
            [['cat_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 510],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     *
     */
    public function getVars()
    {
        return $this->hasMany(ChBotPlayVars::className(),['id'=>'play_id']);
    }
}
