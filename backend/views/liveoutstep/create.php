<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\XSteps */

$this->title = 'Создать шаг';
$this->params['breadcrumbs'][] = ['label' => 'Проживание шаги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xsteps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
