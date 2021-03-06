<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\HappyoldAsset;
use frontend\assets\LiveOutAsset;
use frontend\assets\IeAsset;
use common\widgets\Alert;


HappyoldAsset::register($this);

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


    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="256x256" href="/img/favicon/apple-touch-icon-256x256.png">

    <?php include_once("analyticstracking.php") ?>
</head>

<body class="<?= Yii::$app->view->params['bodyclass'] ?>">
<?php $this->beginBody() ?>
<div id="start_loader"></div>

<div class="overlay"></div>
<div id="loader"></div>





<div id="content-wrapper">
    <main id="panel" class="panel">

<?php if (in_array(Yii::$app->view->params['meta']['id'], [1,5]) == false ) : ?>
        <div id="logosunIcon">
            <div class="burger-container">
                <span id="burgerTop"></span>
                <span id="burgerFilling"></span>
                <span id="burgerBot"></span>
                <span id="menuname">МЕНЮ</span>
            </div>
        </div>
<?php endif; ?>
        <?= \common\widgets\MenuWidget::widget(['formfactor'=>'sun','sunitem'=> Yii::$app->view->params['sunitem'] ]); ?>
        <?= Alert::widget() ?>
        <?= $content; ?>

    </main>
</div>
<div id="menubackfilter" class="menufilter backfilterOff">
</div>
<a id="sendtopage"  class="vizibleOff" href="/<?= Yii::$app->view->params['meta']['sendtopage'] ?>"></a>


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



</body>
</html>
<?php $this->endPage() ?>