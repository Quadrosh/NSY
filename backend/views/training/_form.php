<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Trainings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trainings-form">
<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'master_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Masters::find()->all(), 'id','last_name')) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::classname(), [
                'language' => 'ru',
                'dateFormat' => 'dd-MM-yyyy',
            ]) ?>
        </div>
        <div class="col-sm-5">
            <?= $form->field($model, 't_when')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-8">
            <?= $form->field($model, 't_where')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'map')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'pagehead')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'description')->textarea(['rows' => 2]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'pagedescription')->textarea(['rows' => 2]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'keywords')->textarea(['rows' => 1]) ?>
        </div>


        <div class="col-sm-3">
            <?= $form->field($model, 'full_price')->textInput() ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'currency')->dropDownList(['руб'=>'руб','USD'=>'USD']) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'discount')->textInput() ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'topimage')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-12">
            <?= $form->field($model, 'big_text')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'small_text')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-9">
            <?= $form->field($model, 'order_text')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'order_backimage')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-12">
            <?= $form->field($model, 'text1')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'text2')->textarea(['rows' => 1]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'text3')->textarea(['rows' => 1]) ?>
        </div>

        <div class="col-sm-5">
            <?= $form->field($model, 'action_1_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'action_1_go')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'action_1_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'action_1_backimage')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-sm-5">
            <?= $form->field($model, 'action_2_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'action_2_go')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'action_2_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'action_2_backimage')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'imagelink_alt')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-4">
            <?= $form->field($model, 'sendtopage')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-sm-4">
            <?= $form->field($model, 'view')->dropDownList(['view'=>'View','firstright'=>'firstRight','cyprus'=>'Cyprus']) ?>
        </div>



    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>





    <?php ActiveForm::end(); ?>

</div>
