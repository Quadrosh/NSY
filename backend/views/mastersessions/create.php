<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\Models\MasterSessions */

$this->title = 'Create Master Sessions';
$this->params['breadcrumbs'][] = ['label' => 'Master Sessions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-sessions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
