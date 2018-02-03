<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ch Bot Plays';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-play-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ch Bot Play', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'hrurl',
            [
                'attribute'=>'hrurl',
                'value' => function($data)
                {
                    return '<a  href="/ch-bot-play/view?id='.$data['id'].'">'.$data['hrurl'].'</a>';
                },
                'format'=> 'html',
            ],
            'name',
            'description:ntext',
//            'restriction_id',
            [
                'attribute'=>'restriction_id',
                'label'=>'Ограничение',
                'value'=> function($data) {
                    $restriction = \common\models\ChBotRestriction::find()
                        ->where(['id'=>$data['restriction_id']])->one();
                    return $restriction['short'];
                },
            ],
//            'cat_id',
//            'text:ntext',
            //'created_at',
            //'updated_at',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => \yii\grid\ActionColumn::className(),
                'buttons' => [
                    'delete'=>function($url,$model){
                        $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-play/results','id'=>$model['id']]);
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-list"></span>', $newUrl, [
                            'title' => Yii::t('yii', 'Результаты'),
                            'data-pjax' => '0',
//                            'data-confirm' => Yii::t('yii', 'Тоооочно удалить?'),
                            'data-method'=>'post'
                        ]);
                    },


                ]
            ],
        ],
    ]); ?>
</div>
