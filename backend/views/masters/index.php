<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masters-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Masters', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'last_name',
            'hrurl:url',
            'email',
            'lead_text:ntext',
            'image',
             'status',
            // 'imagelink',
            // 'imagelink_alt',
            // 'sendtopage',
            // 'promolink',
            // 'promoname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
