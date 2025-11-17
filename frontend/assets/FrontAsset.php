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
        "src/js/jquery.min.js",
        'src/scss/vendors/plugin/js/jquery.nice-select.min.js',

        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',

        'dist/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset',


    ];
}


