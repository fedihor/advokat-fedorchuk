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
        'css/template/slicknav.css',
        'css/template/style.css',
        'css/template/responsive.css',
        'css/template/red.css',
        //'css/template/font-awesome.min.css',
        'css/ownstyle.css',
    ];
    public $js = [
        // Template JS
        'js/jquery-2.1.4.min.js',
        'js/jquery.migrate.js',
        'js/modernizrr.js',
        'js/bootstrap.min.js',
        'js/jquery.fitvids.js',
        'js/owl.carousel.min.js',
        'js/nivo-lightbox.min.js',
        'js/jquery.isotope.min.js',
        'js/jquery.appear.js',
        'js/count-to.js',
        'js/jquery.textillate.js',
        'js/jquery.lettering.js',
        'js/jquery.easypiechart.min.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.parallax.js',
        'js/jquery.slicknav.js', 
        'js/script.js',
        //'js/ownscript.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
