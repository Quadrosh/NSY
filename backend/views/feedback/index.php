<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<!--        --><?//= Html::a('Create Feedback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
//            'to_master_id',
            [
                'attribute'=> 'to_master_id',
                'value' => function($data)
                {
                    $theData = \common\models\Masters::find()->where(['id'=>$data['to_master_id']])->one();
                    return $theData['last_name'];
                },
            ],
            'name',
            'city',
//            'phone',
//            'email:email',
            // 'contacts',
             'text:ntext',
            // 'date',
            // 'done',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
