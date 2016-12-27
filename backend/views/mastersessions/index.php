<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Sessions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-sessions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Sessions', ['create'], ['class' => 'btn btn-success']) ?>
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
            'name',
            'discription:ntext',
            'form_1',
            // 'price_1',
            // 'currency_1',
            // 'form_2',
            // 'price_2',
            // 'currency_2',
            // 'cta_name',
            // 'cta_link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
