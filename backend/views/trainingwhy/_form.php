<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TrainingWhy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="training-why-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?= $form->field($model, 'order_num')->textInput() ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'training_id')->textInput(['value' => Yii::$app->request->get('trainid')]) ?>
        </div>
        <div class="col-sm-4">
            <?= $form->field($model, 'direction')->dropDownList(['why'=>'Почему телеска','youllsee'=>'Вас ожидает','ifyou'=>'Если вы...'],[ 'options'=>[Yii::$app->request->get('direction')=>["Selected"=>true]]]) ?>
        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'text')->textarea(['rows' => 1]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>









    </div>

    <?php ActiveForm::end(); ?>

</div>
