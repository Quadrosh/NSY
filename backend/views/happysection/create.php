<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Happysection */

$this->title = 'Create Happysection';
$this->params['breadcrumbs'][] = ['label' => 'Happysections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happysection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
