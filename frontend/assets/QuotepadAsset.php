<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 *  frontend application asset bundle.
 */
class QuotepadAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/_fonts.css',
        'css/happy_quotepad.css',
        'css/happy_quotepad_media.css',
        'css/sun_menu.css',


    ];
    public $js = [
        'libs/modernizr/modernizr.js',
   //     'libs/jquery/jquery-1.11.2.min.js',
        'libs/scrollmagic/scrollmagic.min.js',
        'libs/scrollmagic/animation.gsap.min.js',
        'libs/gsap/tweenmax.min.js',
//        'js/sunmenu.js',
        'js/sunmenuhiding.js',
        'js/happy_quotepad.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
