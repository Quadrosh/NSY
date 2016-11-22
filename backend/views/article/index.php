<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin | Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'list_name',
            'list_num',
            'title',
            'description:ntext',
             'keywords:ntext',
             'text:ntext',
             'pagehead',
             'cat_id',
             'topimage',
             'promolink',
             'promoname',
             'imagelink',
             'imagelink_alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
