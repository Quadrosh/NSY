<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<?php if (!empty(Yii::$app->view->params['article']['topimage'])) : ?>
<header class="main_head " style="background-image: url(/img/<?= Yii::$app->view->params['article']['topimage'] ?>);">
</header>
<?php endif; ?>

<div  class=" white">


    <div class=" container mt20 mb100">
      <div class="paddind_lr_20">
        <div class="row">
            <div class="col-md-10 text-center col-md-offset-1 ">
                <h1 class="method_h mt100"><?= nl2br(Yii::$app->view->params['article']['pagehead']) ?></h1>

            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <p><?= nl2br(Yii::$app->view->params['article']['text']) ?></p>
            </div>
        </div>

        <div class="row">
            <?php if (isset(Yii::$app->view->params['sections'])) : ?>
                <?php foreach (Yii::$app->view->params['sections'] as $section) : ?>
                    <section class=" white mt50">
                        <div class="row">
                            <div class="<?= $section['stylekey'] ?>">
                            <div class="member_head <?php
                            if ($section['arrange'] == 'right') {echo 'col-sm-8 col-sm-offset-4';};
                            if ($section['arrange'] == 'left') {echo 'col-sm-8';};
                            if ($section['arrange'] == 'center') {echo 'col-sm-8 col-sm-offset-2';};
                            ?>">
                                <h3><?= nl2br($section['head']) ?></h3>
                            </div>
                            <div class="clearfix"></div>
                                <div class="row">
                                    <?php if (!empty($section['image'])) : ?>
                                        <div class="article_img <?php
                                        if ($section['arrange'] == 'right') {echo 'col-sm-4';};
                                        if ($section['arrange'] == 'left') {echo 'col-sm-4 col-sm-push-8';};
                                        if ($section['arrange'] == 'center') {echo 'col-sm-6 col-sm-offset-3';};
                                        ?>">
                                            <?= \yii\helpers\Html::img('/img/'.$section['image'],['alt'=>$section['image_alt']]) ?>
                                        </div>
                                    <?php endif; ?>

                                        <div class="member_head <?php
                                            if ($section['arrange'] == 'right') {echo 'col-sm-8';};
                                            if ($section['arrange'] == 'left') {echo 'col-sm-8 col-sm-pull-4';};
                                            if ($section['arrange'] == 'center') {echo 'col-sm-8 col-sm-offset-2';};
                                            ?>">
                                            <p><?= nl2br($section['text']) ?></p>
                                            <?php if (!empty($section['extra'])) : ?>
                                                <p><?= nl2br($section['extra']) ?></p>
                                            <?php endif; ?>
                                            <?php if (!empty($section['promolink'])) : ?>
                                                <div class="bottom_buttons text-center">
                                                    <?php if (substr($section['promolink'], 0, 4) == 'http') {
echo Html::a($section['promoname'], Url::to($section['promolink'], true),['class' => 'btn btn-default method_more']);
                                                    } else {
echo  Html::a($section['promoname'], ['/'. $section['promolink']], ['class' => 'btn btn-default method_more']);
                                                    } ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </section>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
</div>
