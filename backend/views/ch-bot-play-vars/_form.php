<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPlayVars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ch-bot-play-vars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'play_id')->textInput() ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'example')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
