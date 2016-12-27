<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trainings".
 *
 * @property integer $id
 * @property integer $master_id
 * @property string $t_when
 * @property string $city
 * @property string $t_where
 * @property integer $full_price
 * @property string $currency
 * @property integer $discount
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $pagehead
 * @property string $pagedescription
 * @property string $topimage
 * @property string $big_text
 * @property string $small_text
 * @property string $order_text
 * @property string $action_1_name
 * @property string $action_1_go
 * @property string $action_1_link
 * @property string $action_2_name
 * @property string $action_2_go
 * @property string $action_2_link
 * @property string $imagelink
 * @property string $imagelink_alt
 * @property string $sendtopage
 * @property string $promolink
 * @property string $promoname
 */
class Trainings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['master_id', 't_when', 'city', 't_where', 'full_price', 'currency', 'discount', 'title', 'description', 'keywords', 'pagehead', 'pagedescription', 'topimage', 'big_text', 'small_text', 'order_text', 'action_1_name', 'action_1_go', 'action_1_link', 'action_2_name', 'action_2_go', 'action_2_link', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname'], 'required'],
            [['master_id', 'full_price', 'discount'], 'integer'],
            [['t_when'], 'safe'],
            [['description', 'keywords', 'pagedescription', 'big_text', 'small_text', 'order_text'], 'string'],
            [['city', 't_where', 'title', 'pagehead', 'topimage', 'action_1_name', 'action_1_go', 'action_1_link', 'action_2_name', 'action_2_go', 'action_2_link', 'imagelink', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Master ID',
            't_when' => 'T When',
            'city' => 'City',
            't_where' => 'T Where',
            'full_price' => 'Full Price',
            'currency' => 'Currency',
            'discount' => 'Discount',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'pagehead' => 'Pagehead',
            'pagedescription' => 'Pagedescription',
            'topimage' => 'Topimage',
            'big_text' => 'Big Text',
            'small_text' => 'Small Text',
            'order_text' => 'Order Text',
            'action_1_name' => 'Action 1 Name',
            'action_1_go' => 'Action 1 Go',
            'action_1_link' => 'Action 1 Link',
            'action_2_name' => 'Action 2 Name',
            'action_2_go' => 'Action 2 Go',
            'action_2_link' => 'Action 2 Link',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
        ];
    }
}
