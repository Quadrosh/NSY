<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quotepad Imgs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotepad-img-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Quotepad Img', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],

            'id',
          //  'quotepad_id',
            [
                'attribute'=> 'quotepad_id',
                'value' => function($data)
                {
                    $theData = \common\models\Quotepad::find()->where(['id'=>$data['quotepad_id']])->one();
                    return $theData['list_name'];
                },
            ],
            'order_weight',
            'name',
            'alt',
            'style_key',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
