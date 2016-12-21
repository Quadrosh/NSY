<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Happypage */

$this->title = 'Create Happypage';
$this->params['breadcrumbs'][] = ['label' => 'Happypages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happypage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
