<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ch Bot Sessions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-session-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ch Bot Session', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'item_id',
            'item_type',
            'description:ntext',
            //'user_response:ntext',
//            'created_at',
            [
                'attribute'=>'created_at',
                'value'=> function($data)
                {
                    return \Yii::$app->formatter->asDatetime($data->created_at, 'HH:mm dd/MM/yyyy');

                },
                'format'=> 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
