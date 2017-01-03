<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="  col-md-12">
    <div class="text-center">
        <h1 class="page-title"><?= $master['name'] ?> <?= $master['last_name'] ?></h1>
    </div>
</div>
<div class="head_wrapper">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-5">
            <div class="team_img">

                <img src="/img/<?= $master['image'] ?>" alt="<?= $master['name'] ?> <?= $master['last_name'] ?>">

            </div>
        </div>
        <div class="member_head col-md-9 col-sm-8 col-xs-7">
            <?php if (!empty($master->professions)) : ?>
                <h4><?php foreach ($master->professions as $profession) : ?>
                        <?= $profession['name'] ?><br>
                    <?php endforeach; ?></h4>
            <?php endif; ?>
            <h5><span><?= $master['lead_text'] ?> </span></h5>
        </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2 member_discr">
        <div class="separator-3"></div>
        <p><?= nl2br($master['page_description']) ?></p>
    </div>
</div>

<div class="main member_deals col-sm-12">
    <div class="row">
        <?php $count = count($sessions); $i = 1; foreach ($sessions as $session ) : ?>
        <div class=" <?php if ( $i == $count &&  $i % 2 != 0){echo 'col-sm-8 col-sm-offset-2 text-center';} else {echo 'col-sm-6';} ?>">
            <div class="dealtype_item">
                <span class="icon_types"><i class="fa fa-user"></i></span>
                <div class="body">
                    <h4 class="title"><?= $session['name'] ?></h4>
                    <div class="row">
                        <div class="col-sm-8">
                            <h5 class="add">
<?php if (!empty($session['form_1'])) : ?>
                                <?= $session['form_1'] ?> | <?= $session['price_1'] ?> <?= $session['currency_1'] ?>
<?php endif; ?>
<?php if (!empty($session['form_2'])) : ?>
                            <br><?= $session['form_2'] ?> | <?= $session['price_2'] ?> <?= $session['currency_2'] ?>
<?php endif; ?>
                            </h5>
                        </div>
                        <div class="col-sm-4">
<?php if ($i != $count) : ?>
    <?= Html::a($session['cta_name'], [$session['cta_link'], 'to'=>$master['hrurl'], 'session'=>$session['name']],['class' => 'btn btn-default method_more']); ?>
<?php endif; ?>
<?php if ($i == $count &&  $i % 2 == 0) : ?>
    <?= Html::a($session['cta_name'], [$session['cta_link'], 'to'=>$master['hrurl'], 'session'=>$session['name']],['class' => 'btn btn-default method_more']); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <p><?= $session['discription'] ?></p>
<?php if ($i == $count &&  $i % 2 != 0) : ?>
    <?= Html::a($session['cta_name'], [$session['cta_link'], 'to'=>$master['hrurl'], 'session'=>$session['name']],['class' => 'btn btn-default method_more']); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
        <?php $i++;  ?>
        <?php endforeach; ?>


</div>

    <div class="margin-50 "></div>