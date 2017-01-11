<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\Models\Masters */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masters-view">

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
            'name',
            'last_name',
            'email',
            'hrurl',
            'title',
            'description:ntext',
            'keywords',
            'lead_text:ntext',
            'image',
            'page_description:ntext',
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
                <h4>Image Upload</h4>
                <?php $form = ActiveForm::begin([
                    'method' => 'post',
                    'action' => ['/masters/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'image'=>'Image',
                    'imagelink'=>'Imagelink',
                ])->label(false) ?>
                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$model->id])->label(false) ?>


                <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
                <?php ActiveForm::end() ?>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

</section>
