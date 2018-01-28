<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ch Bot Phrases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-phrase-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ch Bot Phrase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hrurl',
            'name',
            'description:ntext',
//            'cat_id',
            [
                'attribute'=>'restriction_id',
                'label'=>'Ограничение',
                'value'=> function($data) {
                    $restriction = \common\models\ChBotRestriction::find()
                        ->where(['id'=>$data['restriction_id']])->one();
                    return $restriction['short'];
                },
            ],
            'text:ntext',
            //'created_at',
            //'updated_at',

//            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => \yii\grid\ActionColumn::className(),
                'buttons' => [
                    'delete'=>function($url,$model){
                        $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-phrase/results','id'=>$model['id']]);
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
