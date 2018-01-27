<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotSession */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-session-view">

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
            'user_id',
            'item_id',
            'item_type',
            'description:ntext',
            'user_response:ntext',
//            'created_at',
            [
                'attribute'=>'created_at',
                'value'=> function($data)
                {
                    return \Yii::$app->formatter->asDatetime($data->created_at, 'HH:mm dd/MM/yyyy');

                },
                'format'=> 'html',
            ],
        ],
    ]) ?>

</div>
<section>
    <div class="container">

        <!-- переменные  -->
        <div class="row mt20 bt pt20">


            <?php
            $query = \common\models\ChBotSessionVars::find()->where(['session_id'=>$model['id']]);

            $varsDataProvider = new \yii\data\ActiveDataProvider([
                'query'=>$query,
                'pagination'=> ['pageSize' => 100],
            ]); ?>


            <div class="col-sm-8 col-sm-offset-2">

                <?php
                echo yii\grid\GridView::widget([
                    'dataProvider' => $varsDataProvider,
                    'emptyText' => 'пока пусто',
                    'columns'=>[
                        'id',
                        [
                            'label' => '#',
                            'attribute'=>'item_var_id',
                            'value' => function($data)
                            {
                                return '#'.$data['item_var_id'];
                            },
                        ],
//                        'item_var_id',
                        'question',
                        'value',
                        'status',
                        'created_at',
//                        [
//                            'label' => 'Переменная',
//                            'attribute'=>'question',
//                            'value' => function($data)
//                            {
//                                return $data['question'];
//                            },
//                        ],
//                        [
//                            'class' => \yii\grid\ActionColumn::className(),
//                            'buttons' => [
//                                'delete'=>function($url,$model){
//                                    $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-play-vars/delete','id'=>$model['id']]);
//                                    return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-trash"></span>', $newUrl, [
//                                        'title' => Yii::t('yii', 'Удалить'),
//                                        'data-pjax' => '0',
//                                        'data-confirm' => Yii::t('yii', 'Точно удалить?'),
//                                        'data-method'=>'post'
//                                    ]);
//                                },
//                                'view'=>function($url,$model){
//                                    return false;
//                                },
//                                'update'=>function($url,$model){
//                                    $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-play-vars/update','id'=>$model['id']]);
//                                    return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-pencil"></span>', $newUrl, [
//                                        'title' => Yii::t('yii', 'Редактировать'),
//                                        'data-pjax' => '0',
//                                        'data-method'=>'post'
//                                    ]);
//                                },
//
//                            ]
//                        ],
                    ],
                ]);
                ?>

            </div>
        </div>
        <!-- /переменные сцены -->
    </div>
</section>
