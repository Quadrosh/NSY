<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-sm-2"><?= $form->field($model, 'list_num')->textInput() ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'list_name')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-3"><?= $form->field($model, 'hrurl')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-3"><?= $form->field($model, 'cat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Category::find()->all(), 'id','name')) ?></div>
</div>
<div class="row">
    <div class="col-sm-6"><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-6"><?= $form->field($model, 'pagehead')->textarea(['rows' => 1, 'maxlength' => true]) ?></div>
    <div class="col-sm-6"><?= $form->field($model, 'description')->textarea(['rows' => 2]) ?></div>
    <div class="col-sm-6"><?= $form->field($model, 'keywords')->textarea(['rows' => 2]) ?></div>
    <div class="col-sm-12"><?= $form->field($model, 'text')->textarea(['rows' => 2]) ?></div>


    <div class="col-sm-4"><?= $form->field($model, 'topimage')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'imagelink')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'imagelink_alt')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-4"></div>
    <div class="col-sm-4"><?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?></div>
</div>















    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
