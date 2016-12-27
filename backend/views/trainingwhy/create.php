<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TrainingWhy */

$this->title = 'Create Training Why';
$this->params['breadcrumbs'][] = ['label' => 'Training Whies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="training-why-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
