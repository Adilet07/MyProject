<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'css/site.css',
        'css/sliderstyle.css',
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions',
        'css/responsive.css',
        'css/style.css',
        'css/style2.css',
        "../web/vite/css/styles-merged.css",
        "../web/vite/css/style.min.css",
        "../web/vite/css/custom.css",
        "https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans",
        "../web/htm/css/skel.css",
          "../web/htm/css/style.css",
          "../web/htm/css/style-desktop.css",
          "../web/htm/css/style-wide.css",

    ];
    public $js = [
        'js/slider.js',
        'js/jquery-1.11.3.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.stickit.min.js',
        'js/menu.js',
        'js/scripts.js',
        'js/game.js',
        "../web/vite/js/scripts.min.js",
        "../web/vite/js/main.min.js",
        "../web/vite/js/custom.js",
        "../web/htm/js/skel.min.js",
      "../web/htm/js/skel-layers.min.js",
      "../web/htm/js/init.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
