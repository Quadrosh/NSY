<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MLine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mline-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-4 col-sm-2">
            <?= $form->field($model, 'motivator_id')->textInput(['value' => Yii::$app->request->get('motivid')]) ?>
        </div>
        <div class="col-xs-4 col-sm-1">
            <?= $form->field($model, 'block_num')->textInput() ?>
        </div>
        <div class="col-xs-4 col-sm-1">
            <?= $form->field($model, 'quote_num')->textInput() ?>
        </div>
        <div class="col-sm-4 col-xs-12"><?= $form->field($model, 'line_style')->textarea(['rows' => 1]) ?></div>
        <div class="col-sm-4 col-xs-12"> <?= $form->field($model, 'mbox_style')->textarea(['rows' => 1]) ?></div>


    </div>

    <?= $form->field($model, 'text')->textarea(['rows' => 1]) ?>







    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
