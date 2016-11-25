<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MotivatorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/_fonts.css',
        'css/motivator.css',


    ];
    public $js = [
        'libs/modernizr/modernizr.js',
   //     'libs/jquery/jquery-1.11.2.min.js',
        'libs/scrollmagic/scrollmagic.min.js',
        'libs/scrollmagic/animation.gsap.min.js',
        'libs/gsap/tweenmax.min.js',
        'js/motivator.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
