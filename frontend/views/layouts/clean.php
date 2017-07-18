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


    <title>NS</title>



    <?php $this->head() ?>




    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="256x256" href="/img/favicon/apple-touch-icon-256x256.png">

</head>

<body class="home">
<?php $this->beginBody() ?>
<div id="start_loader"></div>

<div class="overlay"></div>


<header class="main_head ">

    <?= \common\widgets\MenuWidget::widget(['formfactor'=>'sun','sunitem'=> '1' ]); ?>
    <?= Alert::widget() ?>
    <?= $content; ?>

</header>


<?php $this->endBody() ?>





</body>
</html>
<?php $this->endPage() ?>


