<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lo_steps".
 *
 * @property integer $id
 * @property integer $exercise_id
 * @property integer $step_number
 * @property string $step_text
 * @property string $step_duration
 */
class LiveOutSteps extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'lo_steps';
    }

    public function getExercise()
    {
        return $this->hasOne(LiveOutEx::className(),['id'=>'exercise_id']);
    }
    public function rules()
    {
        return [
            [['exercise_id', 'step_number', 'step_text', 'step_duration'], 'required'],
            [['exercise_id', 'step_number'], 'integer'],
            [['step_text'], 'string'],
            [['step_duration'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exercise_id' => 'Exercise ID',
            'step_number' => 'Step Number',
            'step_text' => 'Step Text',
            'step_duration' => 'Step Duration',
        ];
    }
}
