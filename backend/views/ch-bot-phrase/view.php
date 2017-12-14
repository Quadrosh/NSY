<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\widgets\Pjax;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPhrase */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Phrases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-phrase-view">

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
            'name',
            'description:ntext',
            'cat_id',
            'text:ntext',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

<section>
    <div class="container">

        <!-- изменение текста -->
        <div class="row mt20 bt pt20">
            <?php $form = ActiveForm::begin([
                'id'=>'changeText',
                'action' => ['/ch-bot-phrase/update?id='.$model['id']],
//                    'method' => 'post',
                'options' => ['data-pjax' => true ]
            ]); ?>

            <?= $form->field($model, 'text')
                ->textarea(['rows' => 4,'maxlength' => true, 'id'=>'changeText-text'])
            ?>

            <?= Html::submitButton('Изменить', ['class' => 'btn btn-primary ']) ?>
            <?php ActiveForm::end() ?>
        </div>
        <!-- /изменение текста -->


        <!-- переменные сцены -->
        <div class="row mt20 bt pt20">

            <?php Pjax::begin([
                'id' => 'phraseVarsPjax',
                'timeout' => 2000,
                'enablePushState' => false
            ]); ?>
            <?php
            $newVar = new \common\models\ChBotPhraseVars();
            $query = \common\models\ChBotPhraseVars::find()->where(['play_id'=>$model['id']]);
            $varsDataProvider = new \yii\data\ActiveDataProvider([
                'query'=>$query,
                'pagination'=> ['pageSize' => 100],
            ]); ?>

            <div class=" col-sm-6">
                <h4>Создать переменную</h4>
                <?php $form = ActiveForm::begin([
                    'id'=>'varCreate',
                    'action' => ['/ch-bot-phrase/create-phrase-var?play='.$model['id']],
//                    'method' => 'post',
                    'options' => ['data-pjax' => true ]
                ]); ?>

                <?= $form->field($newVar, 'question')
                    ->textarea(['rows' => 1,'maxlength' => true, 'id'=>'varCreate-question'])
                ?>

                <?= Html::submitButton('Создать <i class="fa fa-share" aria-hidden="true"></i>', ['class' => 'btn btn-primary btn-xs']) ?>
                <?php ActiveForm::end() ?>
            </div>
            <div class="col-sm-6">

                <?php
                echo yii\grid\GridView::widget([
                    'dataProvider' => $varsDataProvider,
                    'emptyText' => 'пока пусто',
                    'columns'=>[
//                        'id',
                        [
                            'label' => '#',
                            'attribute'=>'id',
                            'value' => function($data)
                            {
                                return '#'.$data['id'];
                            },
                        ],

                        [
                            'label' => 'Переменная',
                            'attribute'=>'question',
                            'value' => function($data)
                            {
                                return $data['question'];
                            },
                        ],
                        [
                            'class' => \yii\grid\ActionColumn::className(),
                            'buttons' => [
                                'delete'=>function($url,$model){
                                    $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-phrase-vars/delete','id'=>$model['id']]);
                                    return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-trash"></span>', $newUrl,
//                                        ['title' => Yii::t('yii', 'Удалить'), 'data-pjax' => true,]);
                                        ['title' => Yii::t('yii', 'Удалить'), 'data-pjax' => '0','data-method'=>'post']);
                                },
                                'view'=>function($url,$model){
                                    return false;
                                },
                                'update'=>function($url,$model){
                                    $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-phrase-vars/update','id'=>$model['id']]);
                                    return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-pencil"></span>', $newUrl,
//                                        ['title' => Yii::t('yii', 'Удалить'), 'data-pjax' => true,]);
                                        ['title' => Yii::t('yii', 'Редактировать'), 'data-pjax' => '0','data-method'=>'post']);
                                },

                            ]
                        ],
                    ],
                ]);
                ?>

            </div>
            <?php Pjax::end(); ?>
        </div>
        <!-- /переменные сцены -->
    </div>
</section>
