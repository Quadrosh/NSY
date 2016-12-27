<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<header class="main_head method_central" style="background-image: url(/img/method.svg);">

    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1 class="method_h mt100"><?= Yii::$app->view->params['meta']['pagehead'] ?></h1>

                <div class="mmh_divider d_greyblue "></div>
                <p><?= nl2br(Yii::$app->view->params['meta']['pagedescription']) ?></p>


            </div>
        </div>
    </div>


</header>
<div class="happy_divider "></div>
<section  class=" white">


    <div class=" container mt100 mb100">

<div class="col-sm-6 col-sm-offset-3">

            <?php if (isset(Yii::$app->view->params['articles'])) : ?>
                <?php foreach (Yii::$app->view->params['articles'] as $article) : ?>

                    <?= Html::a($article['list_name'], ['library/article', 'hrurl'=>$article['hrurl']], ['class' => 'infolink']) ?><br>

                <?php endforeach; ?>
            <?php endif; ?>

</div>


    </div>
</section>


