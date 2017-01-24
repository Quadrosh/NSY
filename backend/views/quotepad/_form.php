<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Quotepad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quotepad-form">
    <div class="container">
        <div class="row">
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-sm-6">
                <?= $form->field($model, 'list_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'list_image')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-12">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-12">
                <?= $form->field($model, 'description')->textarea(['rows' => 1]) ?>
            </div>
            <div class="col-sm-12">
                <?= $form->field($model, 'keywords')->textarea(['rows' => 1]) ?>
            </div>

            <div class="col-sm-12">
                <?= $form->field($model, 'text')->textarea(['rows' => 2]) ?>
            </div>

            <div class="col-sm-3">
                <?= $form->field($model, 'text1')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'text2')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'text3')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'text4')->textInput(['maxlength' => true]) ?>
            </div>


            <div class="col-sm-2">
                <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-2">
                <?= $form->field($model, 'author_avatar')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-2">
                <?= $form->field($model, 'author_avatar_alt')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
                <?= $form->field($model, 'whois')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-2">
                <?= $form->field($model, 'lifetime')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-sm-4">
                <?= $form->field($model, 'background_color')->dropDownList([
                    'blue'=>'Blue',
                    'aquamarine'=>'Aquamarine',
                    'yellow'=>'Yellow',
                    'green'=>'Green',
                    'white'=>'White',
                    'red'=>'Red',
                ]) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-4">
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


            <div class="col-sm-12">
                <?= $form->field($model, 'view')->dropDownList(['slideshow'=>'Slideshow','run'=>'Run','cars'=>'Cars']) ?>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>

        </div>
    </div>

















    <?php ActiveForm::end(); ?>

</div>
