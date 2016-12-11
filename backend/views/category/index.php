<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
//            'parent_id',
                [
                    'attribute'=> 'parent_id',
                    // обращаемся к виртуальному своиству полученному через геттер категории
                    'value' => function ($data)
                    {
                        return $data->category['name'] ? $data->category['name'] : 'Корень';
                    },
                ],
                'name',

                [
                    'attribute'=>'keywords',
                    'contentOptions'=>['class'=>'col-sm-4'],
                ],

                [
                    'attribute'=>'description',
                    'contentOptions'=>['class'=>'col-sm-4'],
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>

</div>
