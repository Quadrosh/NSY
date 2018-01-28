<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\widgets\Pjax;
use \yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChBotPhrase */

$this->title = 'Results -'.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ch Bot Phrases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ch-bot-phrase-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    echo yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'emptyText' => 'пока пусто',
        'columns'=>[
            'user_result:ntext',
        ],
    ]);
    ?>


</div>

<section>
    <div class="container">


        <!-- переменные сцены -->
<!--        <div class="row mt20 bt pt20">-->
<!---->
<!--        -->
<!--            <div class="col-sm-6">-->
<!---->
<!---->
<!--            </div>-->
<!-- -->
<!--        </div>-->
        <!-- /переменные сцены -->
    </div>
</section>
