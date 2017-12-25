<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bot Uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bot-use-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bot Use', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
//            'item_id',
            [
                'attribute'=>'item_id',
                'value'=> function($data)
                {
                    if ($data['item_type'] == 'play') {
                        $play = \common\models\ChBotPlay::find()->where(['id'=>$data['item_id']])->one();
                        return $play['hrurl'];
                    }
                    elseif ($data['item_type'] == 'phrase') {
                        $play = \common\models\ChBotPhrase::find()->where(['id'=>$data['item_id']])->one();
                        return $play['hrurl'];
                    }
                    else {
                        return '';
                    }

                },
                'format'=> 'html',
            ],
            'item_type',
            'bot_name',
            'done',
            //'user_result:ntext',
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
