<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ch_bot_phrase".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $cat_id
 * @property string $text
 * @property int $created_at
 * @property int $updated_at
 */
class ChBotPhrase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ch_bot_phrase';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
//                'updatedAtAttribute' => false,
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'text'], 'string'],
            [['cat_id', 'created_at', 'updated_at', 'restriction_id'], 'integer'],
            [['name'], 'string', 'max' => 510],
            [['hrurl'], 'string', 'max' => 255],
            [['hrurl'],'unique'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hrurl' => 'hrurl',
            'name' => 'Name',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'text' => 'Text',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * получить переменные
     */
    public function getVars()
    {
        return $this->hasMany(ChBotPhraseVars::className(),['play_id'=>'id']);
    }

    /**
     * получить ограничение
     */
    public function getRestriction()
    {
//        return $this->hasOne(ChBotRestriction::className(),['item_id'=>'id'])->where(['item_type'=>'phrase']);
        return $this->hasOne(ChBotRestriction::className(),['id'=>'restriction_id']);
    }
}
