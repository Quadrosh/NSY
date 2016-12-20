<?php
/* @var $this yii\web\View */
?>
<section id="live_out" class=" manifestor darkblue">



    <div class="row">
        <div id="contain_all" class="col-sm-6 col-sm-offset-3 ">


            <div class= ""  >
                <div class= "messagebox infobox restricted clearfix"  >


                    <div>
                        <p class="step_txt">Данный контент доступен только зарегистрированным пользователям.<br><br>

                            Пожалуйста войдите или зарегистрируйтесь. </p>
                    </div>
                    <div class="wrapright">
                        <?= \yii\helpers\Html::a('Вернуться к сайту', ['/liveout'],
                            ['class' => "reglink"]) ?>
                    </div>

                </div>
            </div>

            <div class="wrapper">
                <?= \yii\helpers\Html::a('Войти', ['/site/login'],
                    ['class' => "btn nxt", 'id'=>'onebutton']) ?>
            </div>


        </div>

    </div>




</section>
