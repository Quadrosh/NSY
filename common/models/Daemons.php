<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daemons".
 *
 * @property int $id
 * @property string $daemon
 * @property int $enabled
 */
class Daemons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daemons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled'], 'integer'],
            [['daemon'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'daemon' => 'Daemon',
            'enabled' => 'Enabled',
        ];
    }
}
