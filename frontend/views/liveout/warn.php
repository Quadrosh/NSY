<?php
/* @var $this yii\web\View */
?>
<section id="live_out" class=" manifestor darkblue">



    <div class="row">
        <div id="contain_all" class="col-sm-6 col-sm-offset-3 ">
            <h1 class="anyhide"><?= $liveout['ex_name'] ?></h1>
            <h2> ВНИМАНИЕ </h2>


            <div class= "message_border" id="warningden" >
                <div class= "messagebox clearfix"  >

                    <?php
                     require __DIR__ .'/exclamation.php';
                    ?>
                    <p class="warn_txt"><?= nl2br($liveout['warn']); ?></p>
                </div>
            </div>

            <div class="wrapper">
                <?= \yii\helpers\Html::a('К делу', ['liveout/step', 'id'=>$liveout['id'], 'stepnum'=>'1'],
                    ['class' => "btn nxt", 'id'=>'onebutton']) ?>
            </div>


        </div>

    </div>




</section>