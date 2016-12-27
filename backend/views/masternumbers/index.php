<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Numbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-numbers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Numbers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'master_id',
            [
                'attribute'=> 'master_id',
                'value' => function($data)
                {
                    $theData =  \common\models\Masters::find()->where(['id'=>$data['master_id']])->one();
                    return $theData['last_name'];
                },
            ],
            'order_num',
            'number',
            'discription:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
