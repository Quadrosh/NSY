<?php
/* @var $this yii\web\View */
?>
<section id="live_out" class=" manifestor darkblue">



    <div class="row">
        <div id="contain_all" class="col-sm-6 col-sm-offset-3 ">
            <h1 class="anyhide"><?= $liveout['ex_name'] ?></h1>
            <h3> шаг - <?= $currentstep['step_number'] ?> из <?= $laststep ?> </h3>


            <div class= "message_border" id="stepden" >
                <div class= "messagebox clearfix"  >

                    <p class="step_txt"><?= nl2br($currentstep['step_text']); ?></p>
                </div>
            </div>

            <div class="wrapper">
                <?php
                if ($currentstep['step_number']!= $laststep) {
                    echo \yii\helpers\Html::a('Дальше', ['liveout/step',
                        'id'=>$liveout['id'], 'stepnum'=>$currentstep['step_number']+1],
                        [
                            'class' => "btn nxt",
                            'id'=>'onebutton'
                        ]);
                } else {
                    echo \yii\helpers\Html::a('Дальше', ['liveout/thnx', 'id'=>$liveout['id']],
                        [
                            'class' => "btn nxt",
                            'id'=>'onebutton'
                        ]);
                }
                ?>
            </div>


        </div>

    </div>




</section>