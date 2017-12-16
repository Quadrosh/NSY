<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPlay */

$this->title = 'Update Ch Bot Play: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Plays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ch-bot-play-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
