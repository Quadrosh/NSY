<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Professions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="professions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Professions', ['create'], ['class' => 'btn btn-success']) ?>
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
            'start_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
