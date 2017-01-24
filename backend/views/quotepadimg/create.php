<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\QuotepadImg */

$this->title = 'Create Quotepad Img';
$this->params['breadcrumbs'][] = ['label' => 'Quotepad Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotepad-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
