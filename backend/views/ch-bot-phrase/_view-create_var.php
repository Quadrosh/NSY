<?php

use yii\helpers\Html;
use \yii\widgets\Pjax;
use \yii\widgets\ActiveForm;

?>
<!-- переменные сцены -->
<div class="row mt20 bt pt20">
    <?php Pjax::begin([
        'id' => 'phraseVarsPjax',
        'timeout' => 2000,
        'enablePushState' => false
    ]); ?>
    <?php
    $newVar = new \common\models\ChBotPhraseVars();
    $query = \common\models\ChBotPhraseVars::find()->where(['play_id'=>$playId]);
    $varsDataProvider = new \yii\data\ActiveDataProvider([
        'query'=>$query,
        'pagination'=> ['pageSize' => 100],
    ]);
    ?>
    <div class=" col-sm-6">
        <h4>Создать переменную)</h4>
        <?php $form = ActiveForm::begin([
            'id'=>'varCreate',
            'action' => ['/ch-bot-phrase/create-phrase-var?play='.$playId],
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
//                'id',
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
                            return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-trash"></span>', $newUrl, [
                                'title' => Yii::t('yii', 'Удалить'),
                                'data-pjax' => '0',
                                'data-confirm' => Yii::t('yii', 'Точно удалить?'),
                                'data-method'=>'post'
                            ]);
                        },
                        'view'=>function($url,$model){
                            return false;
                        },
                        'update'=>function($url,$model){
                            $newUrl = Yii::$app->getUrlManager()->createUrl(['/ch-bot-phrase-vars/update','id'=>$model['id']]);
                            return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-pencil"></span>', $newUrl, [
                                'title' => Yii::t('yii', 'Редактировать'),
                                'data-pjax' => '0',
                                'data-method'=>'post'
                            ]);
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