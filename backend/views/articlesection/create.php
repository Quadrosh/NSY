<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Articlesection */

$this->title = 'Create Articlesection';
$this->params['breadcrumbs'][] = ['label' => 'Articlesections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articlesection-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
