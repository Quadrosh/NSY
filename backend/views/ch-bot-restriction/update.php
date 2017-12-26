<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotRestriction */

$this->title = 'Update Ch Bot Restriction: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Restrictions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ch-bot-restriction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
