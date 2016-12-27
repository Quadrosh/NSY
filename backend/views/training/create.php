<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Trainings */

$this->title = 'Create Trainings';
$this->params['breadcrumbs'][] = ['label' => 'Trainings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trainings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
