<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imagefile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagefiles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Create Imagefiles', ['create'], ['class' => 'btn btn-success']) ?>
    <div class="row">
        <div class="col-xs-6 col-sm-3">
            <h4>Image Upload</h4>
            <?php $form = ActiveForm::begin([
                'method' => 'post',
                'action' => ['/imagefile/upload'],
                'options' => ['enctype' => 'multipart/form-data'],
            ]); ?>

            <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>

            <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
            <?php ActiveForm::end() ?>
        </div>
        <div class="col-xs-6 col-sm-3">
            <h4>Image Cloud</h4>
            <?php $form = ActiveForm::begin([
                'method' => 'post',
                'action' => ['/imagefile/cloud'],
                'options' => ['enctype' => 'multipart/form-data'],
            ]); ?>

            <?= $form->field($uploadmodel, 'imageFile')->fileInput()->label(false) ?>

            <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end() ?>
        </div>

    </div>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=> 'Image',
                'value' => function($data){
//                    return '<img class="adminTableImg" src="/img/'.$data['name'].'" alt="">';
                    if (!$data['cloudname']) {
                        return '<img class="adminTableImg" src="/img/'.$data['name'].'" alt="">';
                    } else {
                        return cl_image_tag($data['cloudname'], [
                            "alt" => $data['name'] ,
//                            "width" => 70,
                            "height" => 70,
//        "gravity" => "south_east",
//                            "gravity" => "face",
//        "crop" => "thumb",
                            "crop" => "fill"
                        ]);
                    }

                },
                'format'=> 'html',
            ],
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
