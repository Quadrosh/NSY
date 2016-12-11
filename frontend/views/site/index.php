<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<header class="main_head ">
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">

                </div>
                <div class="col-md-6 col-xs-12">

                </div>
            </div>

        </div>
    </nav>



     <?= \common\widgets\MenuWidget::widget(['formfactor'=>'sun','sunitem'=> $sunitem ]); ?>













</header>




