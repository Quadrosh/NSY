<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'libs/html5shiv/es5-shim.min.js',
        'libs/html5shiv/html5shiv.min.js',
        'libs/html5shiv/html5shiv-printshiv.min.js',
        'libs/respond/respond.min.js',
    ];
    public $jsOptions = [
        'condition'=> 'lte IE9',
        'position'=> \yii\web\View::POS_HEAD,
    ];

}
