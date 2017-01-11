<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-view">

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
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'keywords:ntext',
            'pagehead',
            'pagedescription:ntext',
            'imagelink',
            'imagelink_alt',
            'sendtopage',
            'promolink',
            'promoname',
        ],
    ]) ?>

</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <h4>Imagelink Upload</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/page/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->hiddenInput(['value'=>'imagelink'])->label(false) ?>
                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>

</section>