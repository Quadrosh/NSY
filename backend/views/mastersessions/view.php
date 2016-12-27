<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\Models\MasterSessions */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Master Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-sessions-view">

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
            'name',
            'discription:ntext',
            'form_1',
            'price_1',
            'currency_1',
            'form_2',
            'price_2',
            'currency_2',
            'cta_name',
            'cta_link',
        ],
    ]) ?>

</div>
