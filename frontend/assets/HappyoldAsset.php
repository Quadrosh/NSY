<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class HappyoldAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/_fonts.css',
//        'css/live_out.css',
        'css/main.css',
        'css/main_media.css',
        'css/sun_menu.css',


      //  'libs/bootstrap/css/bootstrap.min.css',


    ];
    public $js = [
        'libs/modernizr/modernizr.js',
     //   'libs/jquery/jquery-1.11.2.min.js',
        'libs/parallax/jquery.parallax.js',
        "libs/magnificpopup/magnificpopup.js",
        'libs/waypoints/waypoints.min.js',
        'libs/animate/animate-css.js',
        'libs/stellar/jquery.stellar.min.js',
        'libs/gsap/tweenmax.min.js',
        'js/sunmenuhiding.js',
        'js/happiness.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapPluginAsset',
    ];
}
