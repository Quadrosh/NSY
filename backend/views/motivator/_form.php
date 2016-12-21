<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Motivator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motivator-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-xs-2">
        <?= $form->field($model, 'id')->textInput( ) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'list_section')->dropDownList(['1'=>'CATEGORY','2'=>'PROFESSIONAL','3'=>'CITY']) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'list_num')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-xs-4">
        <?= $form->field($model, 'list_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'position')->dropDownList(['0'=>'Я','1'=>'ТЫ']) ?>
    </div>
    <div class="col-xs-6">
        <?= $form->field($model, 'hrurl')->textInput() ?>
    </div>
    <div class="col-xs-6">
        <?= $form->field($model, 'pagehead')->textInput(['maxlength' => true]) ?>
    </div>

</div>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 1]) ?>

<div class="row">
    <div class="col-xs-4">
        <?= $form->field($model, 'cat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id','name')) ?>

    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'imagelink_alt')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-3">
        <?= $form->field($model, 'imagelink2')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'imagelink2_alt')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'sendtopage')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'section_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'section_color')->dropDownList(['grey'=>'grey','white'=>'white']) ?>
    </div>
    <div class="col-xs-4">
        <?= $form->field($model, 'background')->textInput(['maxlength' => true]) ?>
    </div>








</div>

















    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
