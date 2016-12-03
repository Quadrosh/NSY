<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MLine */

$this->title = 'Update Mline: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
