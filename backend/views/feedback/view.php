<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Feedback */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-view">

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
//            'user_id',
            [
                'attribute'=> 'user_id',
                'value' => \common\models\User::find()->where(['id'=>$model['user_id']])->one()->username,
            ],
            'name',
            'city',
//            'to_master_id',
            [
                'attribute'=> 'to_master_id',
                'value' => \common\models\Masters::find()->where(['id'=>$model['to_master_id']])->one()->last_name,
            ],
            'phone',
            'email:email',
            'contacts',
            'text:ntext',
            'date',
//            'done',
            [
                'attribute'=>'done',
                'value'=> $model->done ? '<span class="text-success">Обработано</span>' : '<span class="text-danger">В работе</span>',
                'format'=> 'html',
            ],
        ],
    ]) ?>

</div>
