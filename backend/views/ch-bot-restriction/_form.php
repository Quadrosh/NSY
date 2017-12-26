<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotRestriction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ch-bot-restriction-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'item_type')->dropDownList(['play'=>'play','phrase'=>'phrase']) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'item_id')->textInput() ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'short')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-8">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'description')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'text')->textarea(['rows' => 2]) ?>
        </div>
    </div>







<!--    --><?//= $form->field($model, 'created_at')->textInput() ?>

<!--    --><?//= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
