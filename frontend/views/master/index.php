<?php
/* @var $this yii\web\View */
?>
<section class="main-container white">

    <div class="container">
        <div class="row">

            <div class="main about_us col-md-12">
                <div class="text-center">
                    <h1 class="page-title"><?= Yii::$app->view->params['meta']['pagehead'] ?></h1>
                </div>



                <!-- page-title end -->
                <div class="head_wrapper">
                    <?php foreach ($masters as $master) : ?>

                    <div class="margin-50"></div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-5">
                            <div class="team_img">
                                <img src="img/<?= $master['image'] ?>" alt="<?= $master['name'] ?> <?= $master['last_name'] ?>">
                            </div>
                        </div>
                        <div class="member_head col-md-9 col-sm-8 col-xs-7">
                            <h2><?= $master['name'] ?> <?= $master['last_name'] ?> </h2>
                        <?php if (!empty($master->professions)) : ?>
                            <h4><?php foreach ($master->professions as $profession) : ?>
                             <?= $profession['name'] ?><br>
                            <?php endforeach; ?></h4>
                        <?php endif; ?>
                            <h5><span><?= $master['lead_text'] ?> </span></h5>
                            <?= \yii\helpers\Html::a('Подробнее', ['master/page', 'hrurl'=>$master['hrurl']], ['class' => 'btn btn-default method_more']) ?>

                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="margin-50"></div>



                </div>

            </div>
        </div>
    </div>

</section>
