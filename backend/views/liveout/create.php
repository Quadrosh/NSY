<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\XExercise */

$this->title = 'Создать Проживание';
$this->params['breadcrumbs'][] = ['label' => 'Проживание', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="liveout-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
