<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quotepads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotepad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Quotepad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description:ntext',
//            'keywords:ntext',
            'list_name',
            // 'list_image',
            // 'text:ntext',
            // 'author',
            // 'author_avatar',
            // 'author_avatar_alt',
            // 'whois',
            // 'lifetime',
             'imagelink',
            // 'imagelink_alt',
            // 'sendtopage',
             'promolink',
             'promoname',
             'background_color',
            // 'image1',
            // 'image2',
            // 'image3',
            // 'image4',
            // 'image5',
            // 'view',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
