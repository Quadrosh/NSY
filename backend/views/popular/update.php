<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Popular */

$this->title = 'Update Popular: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Populars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="popular-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
