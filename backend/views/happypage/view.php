<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Happypage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Happypages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happypage-view">

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
                    'action' => ['/happypage/upload'],
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>

                        <th>N </th>
                        <th>Head</th>
                        <th>Arrange</th>
                        <th>Image</th>
                        <th>Image Upload</th>
                        <th>Image Alt</th>

                        <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($sections as $section) : ?>
                        <tr data-key="14">
                            <td><?= $section['id'] ?></td>
                            <td><?= $section['head'] ?></td>
                            <td><?= $section['arrange'] ?></td>
                            <td><?= $section['image'] ?></td>
                            <td>
                                <?php $form = ActiveForm::begin([
                                    'method' => 'post',
                                    'action' => ['/happysection/upload'],
                                    'options' => ['enctype' => 'multipart/form-data'],
                                ]); ?>
                                <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>
                                <?= $form->field($uploadmodel, 'toModelProperty')->hiddenInput(['value'=>'image'])->label(false) ?>
                                <?= $form->field($uploadmodel, 'toModelId')->hiddenInput(['value'=>$section->id])->label(false) ?>
                                <?= Html::submitButton('', ['class' => 'glyphicon glyphicon-upload']) ?>
                                <?php ActiveForm::end() ?>
                            </td>
                            <td><?= $section['image_alt'] ?></td>

                            <td><a  href="/happysection/update?id=<?= $section['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                                <?= Html::a('', ['/happysection/delete', 'id' => $section['id']], [
                                    'class' => 'glyphicon glyphicon-trash',
                                    'data' => [
                                        'confirm' => 'Удалить этот пункт?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <p>
            <?= Html::a('ДОБАВИТЬ', ['happysection/create', 'id'=>$model->id], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>

<section  	class=" white">
    <div class="container">
        <div class="head_wrapper">
            <div class="row">
                <div class="col-sm-8  col-sm-offset-2">
                    <h1 class="mt50 mb50 "><?= $model['pagehead'] ?></h1>
                    <p><?php if(isset($model['pagedescription'])){ echo nl2br($model['pagedescription']); } ?></p>
                </div>
                <?php foreach ($sections as $section) : ?>
                    <div class="row">
                        <div class="col-sm-8 <?php if($section['arrange']=='right') {echo 'col-sm-push-4';} ?>  happy_head">
                            <h3><?= nl2br($section['head']); ?></h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 happy_text <?php if($section['arrange']=='right') {echo 'col-sm-push-4';} ?>">

                                <p><?= nl2br($section['text']); ?></p>
                            </div>
                            <div class="happy_image col-sm-4 <?php if($section['arrange']=='right') {echo 'col-sm-pull-8';} ?>">
                                <?php if (!empty($section['image'])) : ?>
                                    <?= \yii\helpers\Html::img('/img/'.$section['image'],['alt'=>$section['image_alt'], 'class'=>'']) ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="happy_divider col-xs-12"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>