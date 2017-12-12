<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotPhraseVars */

$this->title = 'Create Ch Bot Phrase Vars';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Phrase Vars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-phrase-vars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
