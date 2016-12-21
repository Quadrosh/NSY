<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\CenterAsset;
use frontend\assets\LiveOutAsset;
use frontend\assets\IeAsset;
use common\widgets\Alert;


CenterAsset::register($this);

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



    <title><?= Yii::$app->view->params['meta']['title'] ?></title>
    <meta name="description" content="<?= Yii::$app->view->params['meta']['description'] ?>">
    <meta name="keywords" content="<?= Yii::$app->view->params['meta']['keywords'] ?>">

    <?php $this->head() ?>




    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

</head>

<body class="<?= Yii::$app->view->params['bodyclass'] ?>">
<?php $this->beginBody() ?>
<div id="start_loader"></div>

<div class="overlay"></div>
<div id="loader"></div>





<div id="content-wrapper">
    <main id="panel" class="panel">
<?php if (Yii::$app->view->params['meta']['id'] !=1 ) : ?>
        <div id="logosunIcon">
            <svg version="1.1"
                 id="menu"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 viewBox="0 0 50 50"
                 style="enable-background:new 0 0 50 50;"
                 xml:space="preserve">
            <style type="text/css">
                .sunglif0{fill:none;stroke:#FCC116;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;}
            </style>
                <g id="sunglif_1_">
                    <line id="XMLID_32_" class="sunglif0" x1="20.1" y1="25" x2="40.1" y2="25"/>
                    <line id="XMLID_31_" class="sunglif0" x1="18.1" y1="17.4" x2="35.4" y2="7.4"/>
                    <line id="XMLID_29_" class="sunglif0" x1="18.1" y1="32.6" x2="35.4" y2="42.6"/>
                    <path id="XMLID_28_" class="sunglif0" d="M9.9,33.7c3-1.7,5-5,5-8.7s-2-6.9-5-8.7"/>
                </g>
        </svg>
        </div>
<?php endif; ?>
        <?= \common\widgets\MenuWidget::widget(['formfactor'=>'sun','sunitem'=> Yii::$app->view->params['sunitem'] ]); ?>
        <?= Alert::widget() ?>
        <?= $content; ?>
    </main>
</div>
<div id="menubackfilter" class="menufilter backfilterOff">
</div>


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