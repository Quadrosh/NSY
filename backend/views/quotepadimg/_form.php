<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\QuotepadImg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quotepad-img-form">

    <div class="container">
        <div class="row">
            <?php $form = ActiveForm::begin([
                'method' => 'post',
                'options' => ['enctype' => 'multipart/form-data'],
            ]); ?>
            <div class="col-xs-4">
                <?=
                $form->field($model, 'quotepad_id')
                    ->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Quotepad::find()->all(), 'id','list_name'),
                        [ 'options'=>[Yii::$app->request->get('quotepad_id')=>["Selected"=>true]]])
                ?>
            </div>
            <div class="col-xs-4">
                <?= $form->field($model, 'order_weight')->textInput() ?>
            </div>
            <div class="col-xs-4">
                <?= $form->field($model, 'style_key')->dropDownList([
                    ' '=>'Нет',
                    'left'=>'Left',
                    'right'=>'Right',
                    'center'=>'Center' ,
                    'top'=>'Top',
                    'bottom'=>'Bottom',
                    'background'=>'Background',
                ]) ?>
            </div>
            <div class="col-sm-4"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
            <div class="col-sm-8"><?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?></div>
        </div>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>


