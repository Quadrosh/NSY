<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\Professions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="professions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'master_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Masters::find()->all(), 'id','last_name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
