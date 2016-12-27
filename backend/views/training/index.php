<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trainings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Trainings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'master_id',
            't_when',
            'city',
            't_where',
            // 'full_price',
            // 'currency',
            // 'discount',
            // 'title',
            // 'description:ntext',
            // 'keywords:ntext',
            // 'pagehead',
            // 'pagedescription:ntext',
            // 'topimage',
            // 'big_text:ntext',
            // 'small_text:ntext',
            // 'order_text:ntext',
            // 'action_1_name',
            // 'action_1_go',
            // 'action_1_link',
            // 'action_2_name',
            // 'action_2_go',
            // 'action_2_link',
            // 'imagelink',
            // 'imagelink_alt',
            // 'sendtopage',
            // 'promolink',
            // 'promoname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
