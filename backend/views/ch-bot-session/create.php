<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ChBotSession */

$this->title = 'Create Ch Bot Session';
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-session-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
