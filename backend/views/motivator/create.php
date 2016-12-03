<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Motivator */

$this->title = 'Create Motivator';
$this->params['breadcrumbs'][] = ['label' => 'Motivators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
