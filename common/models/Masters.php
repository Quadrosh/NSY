<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "masters".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $lead_text
 * @property string $image
 * @property string $description
 * @property string $imagelink
 * @property string $imagelink_alt
 * @property string $sendtopage
 * @property string $promolink
 * @property string $promoname
 */
class Masters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'masters';
    }

    public function getSessions()
    {
        return $this->hasMany(MasterSessions::className(),['master_id'=>'id']);
    }
    public function getNumbers()
    {
        return $this->hasMany(MasterNumbers::className(),['master_id'=>'id']);
    }
    public function getProfessions()
    {
        return $this->hasMany(Professions::className(),['master_id'=>'id']);
    }
    public function rules()
    {
        return [
            [['name', 'hrurl','last_name', 'image', 'description'], 'required'],
            [['lead_text', 'description','page_description','keywords'], 'string'],
            [['hrurl'],'unique'],
            [['name', 'hrurl','title','last_name', 'image', 'imagelink', 'imagelink_alt', 'sendtopage', 'promolink', 'promoname'], 'string', 'max' => 255],
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
            'hrurl' => 'hrurl',
            'last_name' => 'Last Name',
            'lead_text' => 'Lead Text',
            'image' => 'Image',
            'description' => 'Description',
            'imagelink' => 'Imagelink',
            'imagelink_alt' => 'Imagelink Alt',
            'sendtopage' => 'Sendtopage',
            'promolink' => 'Promolink',
            'promoname' => 'Promoname',
        ];
    }
}
