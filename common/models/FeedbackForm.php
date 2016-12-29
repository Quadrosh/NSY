<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $to_master_id
 * @property string $contacts
 * @property string $text
 * @property string $date
 * @property integer $done
 */
class FeedbackForm extends Model
{

//    public static function tableName()
//    {
//        return 'feedback';
//    }
    public $contacts;
    public $text;
    public $user_id;
    public $to_master_id;
    public $done;

    public function rules()
    {
        return [
            [['user_id', 'to_master_id', 'done'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['contacts'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'to_master_id' => 'To Master ID',
            'contacts' => 'Contacts',
            'text' => 'Text',
            'date' => 'Date',
            'done' => 'Done',
        ];
    }
}
