<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MotivatorAsset;
use frontend\assets\IeAsset;
use common\widgets\Alert;

MotivatorAsset::register($this);
IeAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="<?= Yii::$app->language ?>"> <!--<![endif]-->

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

<!--    <title> Мотиваторы  </title>-->
    <title><?= Html::encode($this->title) ?></title>

<!--    <meta name="description" content="Сборники мотивирующих цитат и афоризмов">-->
<!--    <meta name="keywords" content="Мотиваторы, цитаты, как набраться сил" />-->


    <?php include 'bootstrap_grid.php'; ?>
    <?php $this->head() ?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">


</head>

<body class="onepagescroll">
<?php $this->beginBody() ?>

<div id="loader"></div>



<div id="hamburger_anim" class="hamburglar ">
    <div class="burger-icon">
        <div id="burger-container" class="burger-container">
            <span id="menutopline" class="burger-bun-top"></span>
            <span id="menumiddleline" class="burger-filling"></span>
            <span id="menubottomline" class="burger-bun-bot"></span>
        </div>
    </div>
    <div class="burger-ring">
        <svg class="svg-ring">
            <path class="path" fill="none" stroke="#FFC107" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
        </svg>
    </div>
    <svg width="0" height="0">
        <mask id="mask">
            <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#FFC107" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
        </mask>
    </svg>
    <div class="path-burger">
        <div id="menubuttonhover" class="animate-path">
            <div class="path-rotation"></div>
        </div>
    </div>

</div>



<nav id="menu" class="menu menuclose">


    <section class="menu-section">

        <?php include("fun_menu.php"); ?>
    </section>


</nav>
<div id="content-wrapper">

    <main id="panel" class="panel">


        <section id="motivators" class="manifestor white">
            <h2 id="pagename"  >Мотиваторы</h2>
            <p>Мотиватор это подборка мотивирующих фраз, <br> собранных по определенной тематике и настраивающих на позитив. <br> Наши мотиваторы разделены по позиции восприятия.</p>
            <div class=" container mt120 mb100">
                <div class="m_table">
                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Тематические</div>
                        <div class="m_table_button m_table_head">позиция</div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Самопознание</div>
                        <div class="m_table_button">
                            <a href="motivator_selfknowledge_i" class="btn fl">Я</a>
                            <a href="motivator_selfknowledge" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Принятие жизни</div>
                        <div class="m_table_button">
                            <a href="motivator_acceptthelife_i" class="btn fl">Я</a>
                            <a href="motivator_acceptthelife" class="btn fr">ТЫ</a>
                        </div>
                    </div>

                    <div class="m_table_row">
                        <div class="m_table_name">Радость жизни</div>
                        <div class="m_table_button">
                            <a href="motivator_happylife_1i.html" class="btn fl">Я</a>
                            <a href="motivator_happylife_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Жажда перемен</div>
                        <div class="m_table_button">
                            <a href="motivator_changes_1i.html" class="btn fl">Я</a>
                            <a href="motivator_changes_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Развитие</div>
                        <div class="m_table_button">
                            <a href="motivator_evolution_1i.html" class="btn fl">Я</a>
                            <a href="motivator_evolution_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Преодоление трудностей</div>
                        <div class="m_table_button">
                            <a href="motivator_challenges_1i.html" class="btn fl">Я</a>
                            <a href="motivator_challenges_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Держать удар</div>
                        <div class="m_table_button">
                            <a href="motivator_survivethefailure_1i.html" class="btn fl">Я</a>
                            <a href="motivator_survivethefailure_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Самоуважение</div>
                        <div class="m_table_button">
                            <a href="motivator_selfrespect_1i.html" class="btn fl">Я</a>
                            <a href="motivator_selfrespect_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Общение</div>
                        <div class="m_table_button">
                            <a href="motivator_communication_1i.html" class="btn fl">Я</a>
                            <a href="motivator_communication_1.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>

                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Профессиональные</div>
                        <div class="m_table_button m_table_head"></div>

                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Железнодорожник</div>
                        <div class="m_table_button">
                            <a href="geleznaya_doroga_i.html" class="btn fl">Я</a>
                            <a href="geleznaya_doroga.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Авиатор</div>
                        <div class="m_table_button">
                            <a href="aviator_i.html" class="btn fl">Я</a>
                            <a href="aviator.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Спорт</div>
                        <div class="m_table_button">
                            <a href="sport_i.html" class="btn fl">Я</a>
                            <a href="sport.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Строитель</div>
                        <div class="m_table_button">
                            <a href="stroitel_i.html" class="btn fl">Я</a>
                            <a href="stroitel.html" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Рекрутер</div>
                        <div class="m_table_button">
                            <a href="recruitment_i" class="btn fl">Я</a>
                            <a href="recruitment" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Путешественник</div>
                        <div class="m_table_button">
                            <a href="motivator_travel_i" class="btn fl">Я</a>
                            <a href="motivator_travel" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Переводчик</div>
                        <div class="m_table_button">
                            <a href="motivator_translator_i" class="btn fl">Я</a>
                            <a href="motivator_translator" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Учитель</div>
                        <div class="m_table_button">
                            <a href="motivator_teacher_i" class="btn fl">Я</a>
                            <a href="motivator_teacher" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Кадровик</div>
                        <div class="m_table_button">
                            <a href="motivator_hr_i" class="btn fl">Я</a>
                            <a href="motivator_hr" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Повар</div>
                        <div class="m_table_button">
                            <a href="motivator_cook_i" class="btn fl">Я</a>
                            <a href="motivator_cook" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Механик</div>
                        <div class="m_table_button">
                            <a href="motivator_mechanic_i" class="btn fl">Я</a>
                            <a href="motivator_mechanic" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Моряк</div>
                        <div class="m_table_button">
                            <a href="motivator_sailor_i" class="btn fl">Я</a>
                            <a href="motivator_sailor" class="btn fr">ТЫ</a>
                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Бухгалтер</div>
                        <div class="m_table_button">
                            <a href="motivator_accountant_i" class="btn fl">Я</a>
                            <a href="motivator_accountant" class="btn fr">ТЫ</a>
                        </div>
                    </div>

                    <div class="m_table_row">
                        <div class="m_table_name m_table_head">Мой дом</div>
                        <div class="m_table_button m_table_head"></div>

                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Воронеж</div>
                        <div class="m_table_button">
                            <a href="voroneg.html" class="btn fl">Я</a>

                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Москва</div>
                        <div class="m_table_button">
                            <a href="moscow.html" class="btn fl">Я</a>

                        </div>
                    </div>
                    <div class="m_table_row">
                        <div class="m_table_name">Тула</div>
                        <div class="m_table_button">
                            <a href="tula.html" class="btn fl">Я</a>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class=" white">
            <div class="container ">
                <div class="row mb30">

                    <div class="col-xs-4 mt22">

                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,linkedin,lj,surfingbird,viber,whatsapp"></div>
                        <h4> Поделиться </h4>
                    </div>

                    <div class="col-xs-4">
                        <svg
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
							</svg>


                    </div>
                    <div class="col-xs-4 mt22">
                        <a href="motivator_evolution_1.html" id="gonextpage" class="qbtn" >
                            <svg
                                version="1.1" id="arrow"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px"
                                width="66px" height="31px"
                                viewBox="0 0 66 31"
                                style="enable-background:new 0 0 66 31;"
                                xml:space="preserve"
                            >
<g >
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="15.5" x2="63" y2="15.5"/>
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"  x1="49.1" y1="30" x2="63.1" y2="16"/>
    <line  fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"  x1="63.1" y1="15" x2="49.1" y2="1"/>
</g>
								</svg>
                        </a>
                        <h4 class="mt12"> Смотреть мотиватор </h4>
                    </div>




                </div> <!-- row -->
            </div>
        </section>





        <!-- 	</div> -->




    </main>








</div>
<div id="menubackfilter" class="menufilter backfilterOff">
</div>
<a id="sendtopage"  class="vizibleOff" href="motivator_evolution_1.html"></a>





<?php $this->endBody() ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33071018 = new Ya.Metrika({
                    id:33071018,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>

<noscript><div><img src="https://mc.yandex.ru/watch/33071018" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<!-- /Yandex.Metrika counter -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72083602-1', 'auto');
    ga('send', 'pageview');

</script>




</body>
</html>
<?php $this->endPage() ?>




