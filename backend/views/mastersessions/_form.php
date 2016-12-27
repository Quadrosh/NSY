<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\MasterSessions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-sessions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'master_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Masters::find()->all(), 'id','last_name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'form_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_1')->textInput() ?>

    <?= $form->field($model, 'currency_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_2')->textInput() ?>

    <?= $form->field($model, 'currency_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cta_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cta_link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
