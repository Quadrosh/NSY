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
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Gii', 'url' => ['index.php/gii']],
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
        ['label' => 'feedback', 'url' => ['/feedback/index']],
//        ['label' => 'Статьи', 'url' => ['/article/index']],
        [
            'label' => 'Библиотека',
            'items' => [
                ['label' => 'Article page', 'url' => ['/article/index']],
                ['label' => 'Article section', 'url' => ['/articlesection/index']],
                ['label' => 'Happiness page', 'url' => ['/happypage/index']],
                ['label' => 'Happiness section', 'url' => ['/happysection/index']],
                ['label' => 'Index Pages', 'url' => ['/page/index']],
                ['label' => 'Категории', 'url' => ['/category/index']],
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
