<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class LiveOutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/_fonts.css',
//        'css/main.css',
//        'css/main_media.css',

        'css/live_out.css',
//        'css/motivator.css',
        'css/sun_menu.css',




    ];
    public $js = [
        'libs/modernizr/modernizr.js',
     //   'libs/jquery/jquery-1.11.2.min.js',
//        'libs/parallax/jquery.parallax.js',
//        'libs/waypoints/waypoints.min.js',
//        'libs/animate/animate-css.js',
//        'libs/stellar/jquery.stellar.min.js',
//        'libs/bootstrap/js/bootstrap.min.js',
        'libs/gsap/tweenmax.min.js',
        'js/sunmenuhiding.js',

//        'js/common.js',
        'js/live_out.js',
//        'js/motivator.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapPluginAsset',
    ];
}
