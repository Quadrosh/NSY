<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<header  style=" background-image: url(<?= \yii\helpers\Url::to('/img/'. $training->topimage); ?>);">


    <div class="head_parallax">

        <ul id="scene2">


            <li class="layer" data-depth="1.5"><img src="/img/spV2_s1.png"></li>
            <li class="layer " data-depth="-0.9"><img src="/img/spV2_s2.png"></li>
            <li class="layer " data-depth="0.8"><img src="/img/spV2_r1.png"></li>
            <li class="layer " data-depth="-0.6"><img src="/img/spV2_r2.png"></li>
            <li class="layer p2_abstr " data-depth="-0.4"><img src="/img/spV2_e1.png"></li>
            <li class="layer " data-depth="-0.7"><img src="/img/spV2_cs.png"></li>
            <li class="layer " data-depth="4.1"><img src="/img/spV2_s3.png"></li>
        </ul>

    </div>


    <div class="row">
        <div class="col-md-4"></div>
        <!-- main content col-md-pull-2 -->
        <div class="col-md-6 col-xs-12">
            <div class="h_wrapper">
                <div class="header_message lead">
                    <p><?= $training->t_when ?>, <?= $training->city ?></p>
                    <div class="mmh_divider"></div>
                    <h1><?= $master->name ?> <?= $master->last_name ?></h1>
                    <h1><?= $training->pagehead ?></h1>
                    <p><?= $training->pagedescription ?></p>
                    <div class="mmh_divider"></div>
                    <p><?= $training->full_price ?> <?= $training->currency ?></p>
                </div>
<?php if (!empty($training->discount)) : ?>
                <div class="header_action lead">
                    <div class="text">
                        <p><span>Отправь заявку сейчас и получи <?= $training->discount ?>% скидку</span></p>
                    </div>
                    <div class="ha_btn">
                        <p><span><?= Html::a('Отправить заявку', [
                                    'send/discount',
                                    'to'=>$master['hrurl'],
                                    'training'=>$training->date
                                ], ['class' => 'btn btn-custom']); ?></span></p>
                        <?php // echo  Html::a('Отправить заявку', [
 //                           'send/training',
 //                           'to'=>$master['hrurl'],
 //                           'training'=>$training->date
  //                      ], ['class' => 'btn btn-custom']); ?>
                    </div>
                </div>
<?php endif; ?>
<?php if (empty($training->discount)) : ?>
                    <div class="header_action lead">
                        <div class="text">
                            <p><span>Узнать о наличии свободных мест </span></p>
                        </div>
                        <div class="ha_btn">
                            <p><span><?php echo  Html::a('Отправить заявку', [
                                    'send/training',
                                    'to'=>$master['hrurl'],
                                    'training'=>$training->date
                                      ], ['class' => 'btn btn-custom']); ?></span></p>
                        </div>
                    </div>
<?php endif; ?>

            </div>
        </div>


    </div>

</header>

<section class="intersection dark">
    <div class="container">
        <div class="flex_row">
<?php foreach ($numbers as $number) : ?>
            <div class="x_item num_par">
                <p> <strong><?= $number->number ?></strong> </p>
                <div>
                    <p><?= nl2br($number->discription) ?></p>
                </div>
            </div>
<?php endforeach; ?>

        </div>

    </div>

</section>
<section class="teleska">
    <div class="wrapper">
        <div class="head_text">
            <h1>Телесно ориентированная психотерапия</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 black">
                <h3>Решает проблемы</h3>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_a1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Синдром хронической усталости</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_b1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Отсутствие удовлетворенности при наличии материальных благ</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_c1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Сложность сексуальной близости в паре</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_d1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Кризисное состояние в результате развода, потери близких</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_e1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Травмы психологического, бытового и сексуального насилия</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 white">
                <h3>Помогает обрести</h3>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_f1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Уверенность в себе</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_g1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Источник внутренних сил</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_h1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Самореализацию, найти свое дело в жизни</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_i1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Выход на следующий виток развития</p>
                    </div>
                </div>
                <div class="row tel-flex">
                    <div class="col-sm-3 tel_icon">
                        <i class="tel-font tf_j1"></i>
                    </div>
                    <div class="col-sm-9 tel_text">
                        <p>Счастье и радость жизни</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($training->action_1_name)) : // Action 1 line ?>
<section class="action_line">
    <div class="action_wrapper">
        <div class="text">
            <h1><?= $training->action_1_name ?></h1>
        </div>
        <div class="al_btn">
            <?php echo  Html::a( $training->action_1_go , [
                $training->action_1_link,
                'to'=>$master['hrurl'],
                'training'=>$training->date
            ], ['class' => 'btn btn-default']); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if (!empty($training->action_2_name)) : // Асtion 2 section ?>
<section class="free_call" data-stellar-background-ratio="0.9" style="background-image: url(/img/<?= $training->action_2_backimage ?>);">

    <div class="action_message lead">
        <div class="text">
            <p><span><?= $training->action_2_name ?></span></p>
        </div>
        <div class="ha_btn">
            <p><span><?php echo  Html::a( $training->action_2_go , [
                        $training->action_2_link,
                        'to'=>$master['hrurl'],
                        'training'=>$training->date
                    ], ['class' => 'btn btn-custom']); ?></span></button></p>

        </div>
    </div>
</section>
<?php endif; ?>
<?php if (!empty($reasons)) : ?>
<section class="why_we white">
    <div class="container">
        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
                <h1><?= count($reasons) ?> причин выбрать телесную психотерапию</h1>
                <ul>
<?php foreach ($reasons as $reason) : ?>
                    <li>
                        <p><span><i class="glyphicon glyphicon-ok-sign"></i></span><?= $reason->text ?></p>
                    </li>
<?php endforeach; ?>

                </ul>

            </div>

        </div>
    </div>
</section>
<?php endif; ?>
<section class="submit black" data-stellar-background-ratio="0.9" style="background-image: url(/img/<?= $training->order_backimage ?>);">
    <div class="row">
        <div class="order_text col-md-8 col-md-offset-2 mt100 text-justify ">
            <p><?= nl2br($training->order_text) ?></p>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6 text-center col-sm-offset-3">
            <div class="submit_block mb100">
                <div class="form_head">
                    <h4><?= nl2br($training->pagehead) ?></h4>
                    <h4><?= $training->city ?></h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Дата | <?= $training->t_when ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Стоимость участия | <?= $training->full_price ?> <?= $training->currency ?></p>
                        </div>
                    </div>
                </div>
                <h2 class="form-title"> Быстрая заявка </h2>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'method' => 'post',
                    'action' => ['/send/quick'],
                ]); ?>
                <?= $form->field($feedback, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Ваше имя'])->label(false) ?>
                <?= $form->field($feedback, 'phone')->textInput(['maxlength' => true, 'placeholder' => 'Телефон'])->label(false) ?>
                <?= $form->field($feedback, 'to_master_id')->hiddenInput(['value'=>$feedback->to_master_id])->label(false) ?>
                <?= $form->field($feedback, 'contacts')->hiddenInput(['value'=>$feedback->contacts])->label(false) ?>

                <div class="form-submit">
                    <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-default why_we_btn', 'name' => 'login-button']) ?>

                </div>

                <?php ActiveForm::end(); ?>
                <div class="col-sm-12">
                    <?=  Html::a('полная заявка', [
                        'send/training',
                        'to'=>$master['hrurl'],
                        'training'=>$training->date
                    ], ['class' => 'reglink']); ?>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="map black">
    <div class="wrapper clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><?= $training->t_when ?></h2>
                    <p><?= $training->city ?>. <?= $training->t_where ?></p>
                </div>


            </div>
        </div>
<?php if (!empty($training->map)) : ?>
        <?= $training->map ?>
<?php endif; ?>
    </div>

</section>
<div class="mt20"></div>