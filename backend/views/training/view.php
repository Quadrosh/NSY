<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Trainings */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Trainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'master_id',
            't_when',
            'city',
            't_where',
            'full_price',
            'currency',
            'discount',
            'title',
            'description:ntext',
            'keywords:ntext',
            'pagehead',
            'pagedescription:ntext',
            'topimage',
            'big_text:ntext',
            'small_text:ntext',
            'order_text:ntext',
            'action_1_name',
            'action_1_go',
            'action_1_link',
            'action_2_name',
            'action_2_go',
            'action_2_link',
            'imagelink',
            'imagelink_alt',
            'sendtopage',
            'promolink',
            'promoname',
        ],
    ]) ?>

</div>
