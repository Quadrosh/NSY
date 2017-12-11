<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotPlay */

$this->title = 'Create Ch Bot Play';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Plays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-play-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
