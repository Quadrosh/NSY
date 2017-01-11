<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Articlesection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articlesection-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'page_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Articles::find()->all(), 'id','pagehead'),[ 'options'=>[Yii::$app->request->get('id')=>["Selected"=>true]]]) ?>
        </div>
        <div class="col-sm-2"><?= $form->field($model, 'num')->textInput() ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'arrange')->dropDownList(['center'=>'текст в центре', 'left'=>'<-- текст слева', 'right'=>'текст справа -->']) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'stylekey')->textInput(['maxlength' => true]) ?></div>


        <div class="col-sm-3"><?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'image_alt')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'promolink')->textInput(['maxlength' => true]) ?></div>
        <div class="col-sm-3"><?= $form->field($model, 'promoname')->textInput(['maxlength' => true]) ?></div>

    </div>


    <?= $form->field($model, 'head')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>

    <?= $form->field($model, 'extra')->textarea(['rows' => 1]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
