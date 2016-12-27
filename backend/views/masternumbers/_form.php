<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\MasterNumbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-numbers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'master_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Masters::find()->all(), 'id','last_name')) ?>

    <?= $form->field($model, 'order_num')->textInput() ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
