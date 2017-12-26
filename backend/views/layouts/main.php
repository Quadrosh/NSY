<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="256x256" href="/img/favicon/apple-touch-icon-256x256.png">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'NS admin',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'Gii', 'url' => ['index.php/gii']],
        ['label' => 'Статистика',
            'items' => [
                ['label' => 'Статистика', 'url' => ['/statistics']],
                ['label' => 'Popular items', 'url' => ['/popular']],
                ],
        ],
        ['label' => 'User', 'url' => ['/user/index']],
        [
            'label' => 'Мастера',
            'items' => [
                ['label' => 'Masters', 'url' => ['/masters/index']],
                ['label' => 'Master Numbers', 'url' => ['/masternumbers/index']],
                ['label' => 'Master Sessions', 'url' => ['/mastersessions/index']],
                ['label' => 'Master Professions', 'url' => ['/professions/index']],
                ['label' => 'Тренинги', 'url' => ['/training/index']],
                ['label' => 'Training Why', 'url' => ['/trainingwhy/index']],
            ],
        ],
        [
            'label' => 'Проживание',
            'items' => [
                ['label' => 'Упражнение', 'url' => ['/liveout/index']],
                ['label' => 'Шаги', 'url' => ['/liveoutstep/index']],
            ],
        ],
        [
            'label' => 'Мотиваторы',
            'items' => [
                ['label' => 'Мотиваторы', 'url' => ['/motivator/index']],
                ['label' => 'Фразы', 'url' => ['/mline/index']],
            ],
        ],
        [
            'label' => 'Боты',
            'items' => [
                ['label' => 'ChBotSession', 'url' => ['/ch-bot-session/index']],
                ['label' => 'ChBotPlay', 'url' => ['/ch-bot-play/index']],
                ['label' => 'ChBotPlayVars', 'url' => ['/ch-bot-play-vars/index']],
                ['label' => 'ChBotPhrase', 'url' => ['/ch-bot-phrase/index']],
                ['label' => 'ChBotPhraseVars', 'url' => ['/ch-bot-phrase-vars/index']],
                ['label' => 'ChBotRestriction', 'url' => ['/ch-bot-restriction/index']],
                ['label' => 'BotUse', 'url' => ['/bot-use/index']],
                ['label' => 'BotUser', 'url' => ['/bot-user/index']],
            ],
        ],
        [
            'label' => 'Библиотека',
            'items' => [
                ['label' => 'Article page', 'url' => ['/article/index']],
                ['label' => 'Article section', 'url' => ['/articlesection/index']],
                ['label' => 'Happiness page', 'url' => ['/happypage/index']],
                ['label' => 'Happiness section', 'url' => ['/happysection/index']],
                ['label' => 'Index Pages', 'url' => ['/page/index']],
                ['label' => 'Категории', 'url' => ['/category/index']],
                ['label' => 'Quotepad', 'url' => ['/quotepad/index']],
                ['label' => 'Quotepad Images', 'url' => ['/quotepadimg/index']],
                ['label' => 'Картинки', 'url' => ['/imagefile/index']],
                ['label' => 'Заявки', 'url' => ['/feedback/index']],

            ],
        ],


    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Наше Счастье <?= date('Y') ?></p>

        <p class="pull-right">Круто же)</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
