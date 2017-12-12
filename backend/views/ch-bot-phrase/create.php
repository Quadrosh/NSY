<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotPhrase */

$this->title = 'Create Ch Bot Phrase';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Phrases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-phrase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
