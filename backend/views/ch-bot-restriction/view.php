<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotRestriction */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Restrictions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-restriction-view">

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
            'item_type',
            'item_id',
            'short',
            'name',
            'description:ntext',
            'text:ntext',
            [
                'attribute'=>'updated_at',
                'value'=> function($data)
                {
                    return \Yii::$app->formatter->asDatetime($data->updated_at, 'HH:mm dd/MM/yyyy');

                },
                'format'=> 'html',
            ],
            [
                'attribute'=>'created_at',
                'value'=> function($data)
                {
                    return \Yii::$app->formatter->asDatetime($data->created_at, 'HH:mm dd/MM/yyyy');

                },
                'format'=> 'html',
            ],
        ],
    ]) ?>

</div>
