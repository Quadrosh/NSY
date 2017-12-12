<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPhraseVars */

$this->title = 'Update Ch Bot Phrase Vars: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Phrase Vars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ch-bot-phrase-vars-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
