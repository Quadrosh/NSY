<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Happysection */

$this->title = 'Update Happysection: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Happysections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="happysection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
