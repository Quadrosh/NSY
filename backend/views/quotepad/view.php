<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Quotepad */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Quotepads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotepad-view">

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
            'list_name',
            'list_image',
            'text:ntext',
            'text1',
            'text2',
            'text3',
            'text4',
            'author',
            'author_avatar',
            'author_avatar_alt',
            'whois',
            'lifetime',
            'imagelink',
            'imagelink_alt',
            'sendtopage',
            'promolink',
            'promoname',
            'background_color',
            'view',
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
                    'action' => ['/quotepad/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'list_image'=>'List image',
                    'imagelink'=>'Imagelink',


                ])->label(false) ?>
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
<!--        --><?php //$quotes = $model->mLines; //вызываем объекты связи виртуальным свойством - геттером ?>
<h2>Quotepad Images</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>Order Weight</th>
                <th>File Name</th>
                <th>Alt</th>
                <th>style key</th>
                <th>action</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($quotepadImgs as $quotepadImg) : ?>
                <tr data-key="14">
                    <td><?= $quotepadImg['id'] ?></td>
                    <td><?= Html::img('/img/'. $quotepadImg->name, ['class'=>'img100']) ?></td>
                    <td><?= $quotepadImg['order_weight'] ?></td>
                    <td><?= $quotepadImg['name'] ?></td>
                    <td><?= $quotepadImg['alt'] ?></td>
                    <td><?= $quotepadImg['style_key'] ?></td>

                    <td>
                        <?= Html::a('', ['/quotepadimg/update',
                            'id' => $quotepadImg['id'],
                            'quotepad_id'=>$quotepadImg['quotepad_id'],
                        ], ['class' => 'glyphicon glyphicon-refresh',
                            'aria-hidden'=>'true',
                        ]) ?>
                        <?= Html::a('', ['/quotepadimg/view',
                            'id' => $quotepadImg['id'],
                        ], ['class' => 'glyphicon glyphicon-eye-open',
                            'aria-hidden'=>'true',
                        ]) ?>
                        <?= Html::a('', ['/quotepadimg/delete', 'id' => $quotepadImg['id']], [
                            'class' => 'glyphicon glyphicon-trash',
                            'data' => [
                                'confirm' => 'Удалить этот пункт?',
                                'method' => 'post',
                            ],
                        ]) ?></td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <p>
            <?= Html::a('ADD IMAGE', ['quotepadimg/create', 'id'=>$model->id], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>