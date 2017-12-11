<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotPlayVars */

$this->title = 'Create Ch Bot Play Vars';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Play Vars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-play-vars-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
