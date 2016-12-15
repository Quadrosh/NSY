<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Liveout */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Проживание', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="liveout-view">

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
    <?php
    //адаптация в человечий язык уровня сложности для view
    function getLevel($data)
    {
        if ($data == 1) {
            return '<span   class="text-danger">Сложный</span>';
        }
        if ($data == 2) {
            return 'Средний';
        }
        if ($data == 3) {
            return 'Простой';
        }

    }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'view_order',
//            'private',
            [
                'attribute'=>'private',
                'value'=> $model->private ? '<span class="text-danger">Авторизованным</span>' : '<span class="text-success">Всем</span>',
                'format'=> 'html',
            ],
            'ex_name:ntext',
            'ex_description:ntext',
//            'ex_level',
            [
                'attribute'=>'ex_level',
                'value'=> getLevel($model->ex_level),
                'format'=> 'html',
            ],
            'ex_duration',
//            'ex_cat_id',
            [
                'attribute'=> 'ex_cat_id',
                'value' => \backend\models\Category::find()->where(['id'=>$model['ex_cat_id']])->one()->name,
            ],
            'warn:ntext',
            'thanx:ntext',
        ],
    ]) ?>

<!--    'id',-->
<!--    'exercise_id',-->
<!--    'step_number',-->
<!--    'step_text:ntext',-->
<!--    'step_duration',-->


    <table class="table table-striped table-bordered"><thead>
        <tr>
            <th>EX id</th>
            <th>Step ID </th>
            <th>Step №</th>
            <th>Step text</th>
            <th>Step duration</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach ($steps as $step) : ?>
            <tr data-key="14">
                <td><?= $step['exercise_id'] ?></td>
                <td><?= $step['id'] ?></td>
                <td><?= $step['step_number'] ?></td>
                <td><?= $step['step_text'] ?></td>
                <td><?= $step['step_duration'] ?></td>
                <td><a  href="/liveoutstep/updatefor?id=<?= $step['id'] ?>"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?= Html::a('ADD STEP', ['liveoutstep/createfor', 'xid'=>$model->id], ['class' => 'btn btn-danger']) ?>
    </p>

</div>
