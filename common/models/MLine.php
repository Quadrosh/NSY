<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "m_line".
 *
 * @property integer $id
 * @property integer $block_num
 * @property integer $quote_num
 * @property string $text
 * @property string $line_style
 * @property string $mbox_style
 * @property integer $motivator_id
 */
class MLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_line';
    }
    public function getMotivator()
    {
        return $this->hasOne(Motivator::className(),['id'=>'motivator_id']);
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_num', 'quote_num', 'text', 'line_style',  'motivator_id'], 'required'],
            [['block_num', 'quote_num', 'motivator_id'], 'integer'],
            [['text', 'line_style', 'mbox_style'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'block_num' => 'Block Num',
            'quote_num' => 'Quote Num',
            'text' => 'Text',
            'line_style' => 'Line Style',
            'mbox_style' => 'Mbox Style',
            'motivator_id' => 'Motivator ID',
        ];
    }
}
