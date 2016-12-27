<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Trainings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'master_id')->textInput() ?>

    <?= $form->field($model, 't_when')->textInput() ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_where')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_price')->textInput() ?>

    <?= $form->field($model, 'currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pagehead')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pagedescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'topimage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'big_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'small_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'action_1_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_1_go')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_1_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_2_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_2_go')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_2_link')->textInput(['maxlength' => true]) ?>

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
