<?php
/* @var $this yii\web\View */
?>
<section id="live_out" class=" manifestor darkblue">



    <div class="row">
        <div id="contain_all" class="col-sm-6 col-sm-offset-3 ">
            <h2> СПАСИБО </h2>


            <div class= "message_border" id="thanksden" >
                <div class= "messagebox clearfix"  >
                    <p class="step_txt"><?= nl2br($liveout['thanx']); ?></p>
                </div>
            </div>

            <div class="wrapper">
                <?= \yii\helpers\Html::a('К списку проживаний', ['/liveout'],
                    ['class' => "btn nxt", 'id'=>'onebutton']) ?>
            </div>


        </div>

    </div>




</section>
