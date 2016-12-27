<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articlesections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articlesection-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Articlesection', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=> 'page_id',
                'value' => function($data)
                {
                    $theData =  \common\models\Articles::find()->where(['id'=>$data['page_id']])->one();
                    return $theData['pagehead'];
                },
            ],
            'num',
            'head',
//            'text:ntext',
            // 'extra:ntext',
             'stylekey',
             'arrange',
             'image',
             'image_alt',
             'promolink',
             'promoname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
