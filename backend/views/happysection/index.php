<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Happysections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happysection-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Happysection', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'page_id',
            [
                'attribute'=> 'page_id',
                'value' => function($data)
                {
                    $theData =  \common\models\Happypage::find()->where(['id'=>$data['page_id']])->one();
                    return $theData['pagehead'];
                },
            ],
            'head',
            'image',
            'image_alt',
            // 'text:ntext',
             'extra:ntext',
             'arrange',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
