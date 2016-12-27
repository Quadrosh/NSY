<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\Models\MasterNumbers */

$this->title = 'Create Master Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Master Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-numbers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
