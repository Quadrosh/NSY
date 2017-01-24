<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "quotepad_img".
 *
 * @property integer $id
 * @property string $name
 * @property string $alt
 * @property integer $order_weight
 * @property string $style_key
 * @property integer $quotepad_id
 */
class QuotepadImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quotepad_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alt', 'name', 'quotepad_id'], 'required'],
            [['order_weight', 'quotepad_id'], 'integer'],
            [['name', 'alt', 'style_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'File Name',
            'alt' => 'Image Alt',
            'order_weight' => 'Order Weight',
            'style_key' => 'Style Key',
            'quotepad_id' => 'Quotepad ID',
        ];
    }
}
