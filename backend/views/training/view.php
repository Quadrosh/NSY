<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Trainings */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Trainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Точно нужно удалить этот тренинг?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'master_id',
            [
                'attribute'=> 'master_id',
                'value' => \common\models\Masters::find()->where(['id'=>$model['master_id']])->one()->last_name,
            ],
            't_when',
            'city',
            't_where',
            'full_price',
            'currency',
            'discount',
            'title',
            'description:ntext',
            'keywords:ntext',
            'pagehead',
            'pagedescription:ntext',
            'topimage',
            'big_text:ntext',
            'small_text:ntext',
            'order_text:ntext',
            'order_backimage',
            'text1:ntext',
            'text2:ntext',
            'text3:ntext',
            'action_1_name',
            'action_1_go',
            'action_1_link',
            'action_1_backimage',
            'action_2_name',
            'action_2_go',
            'action_2_link',
            'action_2_backimage',
            'imagelink',
            'imagelink_alt',
            'sendtopage',
            'promolink',
            'promoname',
            'view',
            'map',
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
                    'action' => ['/training/upload'],
                    'options' => ['enctype' => 'multipart/form-data'],
                ]); ?>
                <?= $form->field($uploadmodel, 'toModelProperty')->dropDownList([
                    'topimage'=>'Topimage',
                    'order_backimage'=>'Order Backimage',
                    'action_1_backimage'=>'Action 1 backimage',
                    'action_2_backimage'=>'Action 2 backimage',
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

<section>
    <h2>Если вы:</h2>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>

                <th>ID </th>
                <th>text</th>
                <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($ifyous as $ifyou) : ?>
                <tr data-key="14">
                    <td><?= $ifyou['id'] ?></td>
                    <td><?= $ifyou['text'] ?></td>

                    <td><a  href="/trainingwhy/update?id=<?= $ifyou['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                        <?= Html::a('', ['/trainingwhy/delete', 'id' => $ifyou['id']], [
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
        <p>
            <?= Html::a('ДОБАВИТЬ', ['trainingwhy/createfor', 'trainid'=>$model->id, 'direction'=>'ifyou'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <h2>На тренинге будет:</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>

                <th>ID </th>
                <th>text</th>
                <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($methods as $method) : ?>
                <tr data-key="14">
                    <td><?= $method['id'] ?></td>
                    <td><?= $method['text'] ?></td>

                    <td><a  href="/trainingwhy/update?id=<?= $method['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                        <?= Html::a('', ['/trainingwhy/delete', 'id' => $method['id']], [
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
            <?= Html::a('ДОБАВИТЬ', ['trainingwhy/createfor', 'trainid'=>$model->id, 'direction'=>'youllsee'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>

<section>
    <h2>Почему телеска:</h2>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>

                <th>ID </th>
                <th>text</th>
                <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($reasons as $reason) : ?>
                <tr data-key="14">
                    <td><?= $reason['id'] ?></td>
                    <td><?= $reason['text'] ?></td>

                    <td><a  href="/trainingwhy/update?id=<?= $reason['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                        <?= Html::a('', ['/trainingwhy/delete', 'id' => $reason['id']], [
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
        <p>
            <?= Html::a('ДОБАВИТЬ', ['trainingwhy/createfor', 'trainid'=>$model->id, 'direction'=>'why'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</section>