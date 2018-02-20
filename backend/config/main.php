<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules'=>[
        'statistics' => [
            'class' => 'common\modules\statistics\StatModule',
//            'layout' => 'clean',
        ]
    ],
    'aliases'=>[
        '@moduleStat'=>'@common/modules/statistics',
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'cookieValidationKey' => 'UoacjIvhEGnvFxFpgJqb'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // 'useFileTransport'  true = send all mails to a file
            // 'useFileTransport'  false + configure a transport =  mailer send real emails.
            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.list.ru',
//                'username' => 'quadrosh@list.ru',
//                'password' => 'cxzaqwe3edc',
//                'port' => '465',
//                'encryption' => 'ssl',
//            ],
        ],
        'assetManager' => [
            // подключаем symlinks
            'linkAssets' => true,
        ],
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
//                'liveout/warn?<id:\d+>' => 'liveout/warn',
                'statistics/' => 'statistics/stat/index', //модуль статистики

            ],
        ],

    ],
    'params' => $params,
];
