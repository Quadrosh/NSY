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

    public function getMaster()
    {
        return $this->hasOne(Masters::className(),['id' => 'master_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['master_id', 't_when', 'city',  'full_price', 'currency',  'title', 'description', 'keywords', 'pagehead', 'pagedescription', 'topimage', 'order_text', 'action_1_name', 'action_1_go', 'date', 'action_1_link'], 'required'],
            [['master_id', 'full_price', 'discount'], 'integer'],
            [['date'], 'safe'],
            [['description', 'keywords', 'pagedescription', 'big_text', 'small_text', 'order_text', 'map','text1','text2','text3'], 'string'],
            [['city', 'order_backimage', 'action_2_backimage', 't_where', 'title', 'pagehead', 'topimage', 'action_1_name', 'action_1_go', 'action_1_link', 'action_2_name', 'action_2_go', 'action_2_link', 'imagelink', 'date', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname','action_1_backimage'], 'string', 'max' => 255],
            [['currency','view'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'master_id' => 'Мастер',
            'date' => 'Дата начала',
            't_when' => 'Дата в формате: 30-31 месяц 2017',
            'city' => 'Город',
            't_where' => 'Адрес',
            'full_price' => 'Full Price',
            'currency' => 'Currency',
            'discount' => 'Discount %',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'pagehead' => 'Название тренинга',
            'pagedescription' => 'Краткое описание',
            'topimage' => 'Topimage',
            'big_text' => 'Big Text',
            'small_text' => 'Small Text',
            'order_text' => 'Order Text',
            'order_backimage' => 'Order Back Image',
            'action_1_name' => 'Action 1 Name',
            'action_1_go' => 'Action 1 Go',
            'action_1_link' => 'Action 1 Link',
            'action_2_name' => 'Action 2 Name',
            'action_2_go' => 'Action 2 Go',
            'action_2_link' => 'Action 2 Link',
            'action_2_backimage' => 'Action 2 Back Image',
            'action_1_backimage' => 'Action 1 Back Image',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
            'view' => 'View',
            'map' => 'Map',
            'text1' => 'text1',
            'text2' => 'text2',
            'text3' => 'text3',
        ];
    }
}
