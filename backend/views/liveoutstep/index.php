<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проживание шаги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xsteps-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать шаг', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'exercise_id',
            'step_number',
            'step_text:ntext',
            'step_duration',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
