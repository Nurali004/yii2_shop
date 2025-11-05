<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/front';
    public $css = [
        'dist/main.css',


    ];
    public $js = [

        'src/js/jquery.min.js',
        'src/js/bootstrap.min.js',

        'src/scss/vendors/plugin/js/jquery.nice-select.min.js',
//        'dist/main.js',
        'src/js/main.js',

        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',



    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}


