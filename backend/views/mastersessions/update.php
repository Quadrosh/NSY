<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\MasterSessions */

$this->title = 'Update Master Sessions: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Master Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-sessions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
