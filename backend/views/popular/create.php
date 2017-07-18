<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Popular */

$this->title = 'Create Popular';
$this->params['breadcrumbs'][] = ['label' => 'Populars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="popular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
