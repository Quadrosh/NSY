<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<header class="main_head ">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <a class="navbar-brand" href="happiness.html"><svg
                            version="1.1" id="logosun"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px"
                            width="100px" height="100px"
                            viewBox="0 0 100 100"
                            style="enable-background:new 0 0 100 100;"
                            xml:space="preserve"
                        >

<g>
    <circle  fill="#FFC107" cx="49.9" cy="8.6" r="3.9"/>
</g>
                            <path fill="#FFC107" d="M61.5,34.4c-1.4-1-5.6-3.8-11.6-3.8c-6,0-10.2,2.8-11.6,3.8c1-1.3,3.9-5.5,3.9-11.6c0-6.1-2.9-10.3-3.9-11.6
	c1.3,1,5.5,3.9,11.6,3.9c6.1,0,10.3-2.9,11.6-3.9c-1,1.3-3.8,5.5-3.8,11.6C57.7,28.8,60.5,33,61.5,34.4z"/>
                            <g>
                                <circle fill="#FFC107" cx="6.9" cy="40" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M35,36.9c-1.4,1-5.3,4.1-7.2,9.9c-1.9,5.7-0.5,10.6,0,12.2c-0.9-1.3-4-5.4-9.8-7.3c-5.8-1.9-10.7-0.4-12.2,0.1
	c1.3-0.9,5.4-4,7.3-9.9c1.9-5.8,0.4-10.7-0.1-12.2c1,1.4,4.1,5.3,9.8,7.2C28.5,38.8,33.4,37.4,35,36.9z"/>
                            <g>
                                <circle fill="#FFC107" cx="23.4" cy="90.5" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M29.1,62.9c0.5,1.6,2.3,6.3,7.2,9.9c4.9,3.5,9.9,3.8,11.6,3.8c-1.5,0.5-6.4,2.1-10,7.1
	c-3.6,5-3.7,10.1-3.7,11.7c-0.5-1.6-2.2-6.4-7.1-10c-4.9-3.6-10-3.7-11.7-3.7c1.6-0.5,6.3-2.2,9.9-7.1C29,69.6,29.1,64.5,29.1,62.9z
	"/>
                            <g>
                                <circle fill="#FFC107" cx="76.6" cy="90.4" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M52,76.4c1.7,0,6.7-0.2,11.6-3.8c4.9-3.5,6.6-8.2,7.2-9.9c0,1.6,0.1,6.7,3.7,11.7c3.6,5,8.4,6.6,10,7.1
	c-1.6,0-6.7,0.1-11.7,3.7c-4.9,3.6-6.6,8.4-7.1,10c0-1.7-0.2-6.7-3.7-11.6C58.4,78.6,53.6,76.9,52,76.4z"/>
                            <g>
                                <circle fill="#FFC107" cx="93" cy="39.8" r="3.9"/>
                            </g>
                            <path fill="#FFC107" d="M72.1,58.8c0.5-1.6,1.9-6.5,0-12.2c-1.9-5.7-5.8-8.9-7.2-9.9c1.5,0.5,6.4,2,12.2,0.1c5.8-1.9,8.9-6,9.8-7.3
	c-0.5,1.5-2,6.4-0.1,12.3c1.9,5.8,5.9,8.9,7.3,9.8c-1.6-0.5-6.4-1.9-12.2-0.1C76.2,53.5,73.1,57.5,72.1,58.8z"/>
							</svg></a>
                </div>
                <div class="col-md-6 col-xs-12">

                </div>
            </div>

        </div>
    </nav>
     <?= \common\widgets\MenuWidget::widget(['formfactor'=>'sun']); ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-xs-12">
            <div class="container center">
                <div class="main_message lead centershort">
                    <a href="happiness.html" id="hapiness_link" class="btn homelink tophomelink ">В чем суть</a>
                    <h1 id="happycenter"	class="onemainword ">счастье</h1>

                    <div class="col-sm-6">
                        <a href="motivators.html" id="motivator_link"	class="btn homelink bottomhomelink">Мотиватор</a>
                    </div>
                    <div class="col-sm-6">
                        <a href="about_us.html" id="help_link"	class="btn homelink bottomhomelink">Помощь в достижении</a>
                    </div>



                </div>






            </div>
        </div>
        <div class="col-md-2 col-xs-12">
            <div class="sidebar ">
                <div class="bs-component">
                    <ul class="nav nav-pills pills-fade nav-stacked">
                        <li class="active ">
                            <a href="index.html">Главная<span class="menu_icon n_a"><i class="glyphicon glyphicon-home"></i></span></a></li>
                        <li><a href="training.html">
                                <span class="item ">Тренинг</span>
                                <span class="menu_icon"><i class="glyphicon glyphicon-flash"></i></span></a></li>
                        <li><a href="method.html">
                                <span class="item ">Методики</span>
                                <span class="menu_icon"><i class="glyphicon glyphicon-cog"></i></span></a></li>
                        <li><a href="about_us.html">
                                <span class="item ">О нас</span>
                                <span class="menu_icon"><i class="glyphicon glyphicon-user"></i></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>








    <!-- 	<ul id="scene1">
            <li class="layer l_stars" data-depth="1.20"><img src="img/stars.png"></li>
            <li class="layer l_stars_inv" data-depth="-0.80"><img src="img/stars_2.png"></li>
            <li id="flyinglogosun" class="layer logo_sun" data-depth="3.80"><img src="img/NS-logo_sun.png"></li>



        </ul> -->



</header>




