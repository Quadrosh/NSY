<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $to_master_id
 * @property string $contacts
 * @property string $text
 * @property string $date
 * @property integer $done
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'to_master_id', 'done'], 'integer'],
            [['text'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['contacts'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
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
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email,$subject)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom('sender@nashe-schastye.ru')
            ->setSubject($subject)
            ->setTextBody($this->text)
            ->send();
    }
}
