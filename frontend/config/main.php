<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'name' => 'Наше Счастье',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 'DgaujypcSnGWPqwdtwTo'
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
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_identity-frontend',
                'httpOnly' => true
            ],
        ],
//        'assetManager' => [
//            'bundles' => [
//                'yii\web\JqueryAsset' => [
//                    'sourcePath' => null,   // do not publish the bundle
//                    'js' => [
//                        '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
//                    ]
//                ],
//            ],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
          //  'savePath' => sys_get_temp_dir()
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
            'enableStrictParsing' => false,
            'rules' => [
                'motivator'=>'motivator/list',
                'motivator/<pagename:[0-9a-z\-\_]+>' => 'motivator/show',
                'liveout/warn/<id:\d+>' => 'liveout/warn',
                'liveout/step/<id:\d+>/<stepnum:\d+>' => 'liveout/step',
                'liveout/thnx/<id:\d+>' => 'liveout/thnx',
            ],
        ],

    ],
    'params' => $params,
];
