<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Quotepad */

$this->title = 'Create Quotepad';
$this->params['breadcrumbs'][] = ['label' => 'Quotepads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotepad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
