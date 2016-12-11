<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MLine */

$this->title = 'Copy Mline';
$this->params['breadcrumbs'][] = ['label' => 'Mlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mline-copy">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_copyform', [
        'model' => $model,
    ]) ?>

</div>
