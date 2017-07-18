<?php




?>
<nav class="navbar " role="navigation">
    <div class="container">
        <div class="navbar-brand">
            <img src="/img/NS-logo_sun.png" alt="Наше Счастье">
        </div>
        <div class="navbar-header">
            <ul class="nav navbar-nav">
<!--                <li class="pull-left"><a href="#">Dashboard</a></li>-->
                <li><a href="/liveout">Проживание</a></li>
                <li><a href="/motivator">Мотиваторы</a></li>
                <li><a href="/happiness">Суть счастья</a></li>
                <li><a href="/library">Библиотека</a></li>
                <li><a href="/master">Мастера</a></li>
                <li><a href="/quotepad">Веселый цитатник</a></li>

            </ul>
        </div>

    </div>
</nav>
<div class="container">
    <div class="pop_wrap">
        <h2>Популярные материалы</h2>

        <div class="popularItems">
            <?php foreach ($pages as $page) : ?>
                <div class="popItem">
                    <?php if ($page['type']== 'motivator') : ?>
                    <a href="<?= $page['link'] ?>" class="topHalf" style="background-image: url(/img/<?= $page['image'] ?>);background-size: cover;background-position: center center;">
                        <img class="motivator_ico" src="/img/motivator_popular.png" alt="Наше счастье - <?= $page['type'] ?> - <?= $page['name'] ?>">
                        <?php endif; ?>
                        <?php if ($page['type'] != 'motivator') : ?>
                        <a href="<?= $page['link'] ?>" class="topHalf" >
                            <img class="image_ico" src="/img/<?= $page['image'] ?>" alt="Наше счастье - <?= $page['type'] ?> - <?= $page['name'] ?>">
                            <?php endif; ?>
                        </a>
                        <a href="<?= $page['link'] ?>" class="bottomHalf">

                            <?php
                            if ($page['type'] == 'motivator' ) { echo '<h5 class="pop_type">Мотиватор</h5>';}
                            if ($page['type'] == 'liveout' ) { echo '<h5 class="pop_type">Проживание</h5>';}
                            if ($page['type'] == 'happiness' ) { echo '<h5 class="pop_type">Суть счастья</h5>';}
                            ?>
                            <h4 class="pop_name"><?= $page['name'] ?></h4>

                        </a>


                </div>
            <?php endforeach; ?>
        </div>
        <a class="carouselControl slickPrev"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                  viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
    <style type="text/css">
        .button_x5F_left_st0{fill:none;stroke-width:3;stroke-miterlimit:10;}
        .button_x5F_left_st1{fill:none;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    </style>
                <g >
                    <circle  class="button_x5F_left_st0" cx="49.7" cy="50" r="46.4"/>
                    <line  class="button_x5F_left_st1" x1="38.9" y1="50" x2="61.5" y2="27.5"/>
                    <line  class="button_x5F_left_st1" x1="38.9" y1="50.5" x2="61.5" y2="73"/>
                </g>
    </svg></a>

        <a class="carouselControl slickNext" ng-click="slickReviewConfig.method.slickNext()"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                                                  viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
    <style type="text/css">
        .button_x5F_right_st0{fill:none;stroke-width:3;stroke-miterlimit:10;}
        .button_x5F_right_st1{fill:none;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
    </style>
                <g >
                    <circle  class="button_x5F_right_st0" cx="49.7" cy="50" r="46.4"/>
                    <line  class="button_x5F_right_st1" x1="61.5" y1="50.5" x2="38.9" y2="73"/>
                    <line  class="button_x5F_right_st1" x1="61.5" y1="50" x2="38.9" y2="27.5"/>
                </g>
    </svg></a>

    </div>
</div>

