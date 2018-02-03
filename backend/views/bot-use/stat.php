<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bot Games';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bot-use-index">

    <h1><?= Html::encode($this->title.' за '.$days.'дней') ?></h1>

    <p class="text-center centerSumm">
        <?= $summ; ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            [
                'attribute'=>'hrurl',
                'value' => function($data)
                {
                    if ($data['type']=='phrase') {
                        return '<a  href="/ch-bot-phrase/results?id='.$data['id'].'">'.$data['hrurl'].'</a>';
                    }
                    elseif ($data['type']=='play') {
                        return '<a  href="/ch-bot-play/results?id='.$data['id'].'">'.$data['hrurl'].'</a>';
                    }
                },
                'format'=> 'html',
            ],
            'plays',
            'interrupt',
            'start',
            'done',

//            'name',
//            'cat_id',
//            'text:ntext',
            //'created_at',
            //'updated_at',

        ],
    ]); ?>
</div>
