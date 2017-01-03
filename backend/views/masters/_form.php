<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\Masters */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masters-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrurl')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'lead_text')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagelink_alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sendtopage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
