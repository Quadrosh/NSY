<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPlayVars */

$this->title = 'Update Ch Bot Play Vars: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Play Vars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ch-bot-play-vars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
