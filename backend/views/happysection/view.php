<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Happysection */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Happysections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happysection-view">

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
//            'page_id',
            [
                'attribute'=> 'page_id',
                'value' => \common\models\Happypage::find()->where(['id'=>$model['page_id']])->one()->pagehead,
            ],
            'head',
            'image',
            'image_alt',
            'text:ntext',
            'extra:ntext',
            'arrange',
        ],
    ]) ?>

</div>
