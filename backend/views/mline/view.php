<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MLine */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mline-view">

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
            'block_num',
            'quote_num',
            'text:ntext',
            'line_style:ntext',
            'mbox_style:ntext',
            'motivator_id',
        ],
    ]) ?>

</div>
