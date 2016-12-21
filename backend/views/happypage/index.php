<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Happypages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happypage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Happypage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description:ntext',
//            'keywords:ntext',
            'pagehead',
//             'pagedescription:ntext',
             'imagelink',
             'imagelink_alt',
             'sendtopage',
             'promolink',
             'promoname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
