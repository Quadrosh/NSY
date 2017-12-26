<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotRestriction */

$this->title = 'Create Ch Bot Restriction';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Restrictions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-restriction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
