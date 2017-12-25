<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BotUse */

$this->title = 'Create Bot Use';
$this->params['breadcrumbs'][] = ['label' => 'Bot Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bot-use-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
