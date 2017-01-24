<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\QuotepadImg */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quotepad Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="quotepad-img-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                    <?= Html::a('GO TO QUOTEPAD', ['/quotepad/view', 'id' => $model->quotepad_id], ['class' => 'btn btn-success']) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        [
                            'attribute'=> 'quotepad_id',
                            'value' => \common\models\Quotepad::find()->where(['id'=>$model['quotepad_id']])->one()->list_name,
                        ],
                        'id',
                        'name',
                        'alt',
                        'order_weight',
                        'style_key',

                    ],
                ]) ?>

                <?= Html::img('/img/'. $model->name, ['class'=>'img']) ?>

            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h4>Image Upload</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/quotepadimg/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>

                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
                <?php ActiveForm::end() ?>

            </div>
            <div class="col-sm-6">

                <h4>Image Change</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/quotepadimg/change'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>

                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Change', ['class' => 'btn btn-danger']) ?>
                <?php ActiveForm::end() ?>

            </div>
        </div>
    </div>
</section>


