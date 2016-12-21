<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Happysection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="happysection-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-3"><?= $form->field($model, 'page_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Happypage::find()->all(), 'id','pagehead')) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'arrange')->dropDownList(['left'=>'<-- текст слева', 'right'=>'текст справа -->']) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'image_alt')->textInput(['maxlength' => true]) ?></div>
    </div>





    <?= $form->field($model, 'head')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'extra')->textarea(['rows' => 2]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
