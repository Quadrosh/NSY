<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BotUse */

$this->title = 'Update Bot Use: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Bot Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bot-use-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
