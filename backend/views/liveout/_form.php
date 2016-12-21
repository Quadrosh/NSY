<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\XExercise */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xexercise-form">

        <?php $form = ActiveForm::begin(); ?>
  <div class="row">
   <div class="row">
    <div class="col-xs-3">
        <?= $form->field($model, 'ex_name')->textInput() ?>
    </div>

    <div class="col-xs-1">
        <?= $form->field($model, 'view_order')->textInput() ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'private')->dropDownList(['0'=>'Всем','1'=>'Авторизованным']) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'ex_level')->dropDownList(['1'=>'Сложный','2'=>'Средний','3'=>'Простой']) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'ex_cat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id','name')) ?>
    </div>
    <div class="col-xs-2">
        <?= $form->field($model, 'ex_duration')->textInput() ?>
    </div>
   </div>


        <?= $form->field($model, 'ex_description')->textarea(['rows' => 1]) ?>

        <?= $form->field($model, 'warn')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'thanx')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

  </div> <!-- row -->
        <?php ActiveForm::end(); ?>




</div>
