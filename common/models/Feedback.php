<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $to_master_id
 * @property string $phone
 * @property string $email
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
            [['phone','city', 'email', 'text'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['phone','name','city', 'email', 'contacts'], 'string', 'max' => 255],

            ['email','email'],
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
            'name' => 'Имя',
            'city' => 'Город/Регион',
            'to_master_id' => 'Мастеру',
            'phone' => 'Контактный телефон',
            'email' => 'e-mail',
            'contacts' => 'Дополнительная контактная информация',
            'text' => 'Комментарий',
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
            ->setTextBody($subject." Имя: ".$this->name ." Город: ".$this->city ." Телефон: ".$this->phone ." Email: ".$this->email ." Контакты: ".$this->contacts ." Текст: ".$this->text)
            ->setHtmlBody(
                $subject .
                " <br/> Имя: ".$this->name .
                " <br/> Город: ".$this->city .
                " <br/> Телефон: ".$this->phone .
                " <br/> Email: ".$this->email .
                " <br/> доп. контакты: " . $this->contacts .
                " <br/> Комментарий: <br/> " .
                nl2br($this->text)
            )
            ->send();
    }
}
