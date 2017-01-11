<?php
use \yii\helpers\Html;
?>
<header style="background-image: url(img/trainings.svg);" class="main_head method_central" id="main_trainings">

    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1>Тренинги</h1>

                <div class="mmh_divider black"></div>

            </div>
        </div>
    </div>

</header>

<section class="main-container white">
    <div class="margin-100"></div>
    <?php foreach ($trainings as $training) : ?>
        <div class="container">
            <div class="row">

                <div class="main col-md-8 col-md-offset-2">
                    <div class="head_wrapper">

                        <div class="row">
                            <div class="col-md-4 col-sm-4 text-center">
                                <h2><?= $training->city ?></h2>
                                <h4><?= $training->t_when ?> </h4>
                            </div>
                            <div class=" col-md-8 col-sm-8 ">
                                <div class="alltrain_head" >
                                    <h3><?=  $training->pagehead ?></h3>
                                    <p>Мастер: <?= Html::a($training->master->name.' '.$training->master->last_name, ['master/page', 'hrurl'=>$training->master->hrurl], ['class' => 'infolink']) ?> </p>

                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <?= Html::a('Подробнее', ['training/view', 'master'=>$training->master->hrurl, 'date'=>$training->date], ['class' => 'btn btn-default method_more']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mmh_divider black"></div>
    <?php endforeach; ?>











    <div class="margin-100"></div>
</section>