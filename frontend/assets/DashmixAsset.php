<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashmixAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '/frontend';
    public $css = [
        'css/site.css',
        'dashmix/css/dashmix.css',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
    ];
    public $js = [

        'dashmix/js/dashmix.app.min.js',
        'dashmix/js/plugins/jquery-validation/jquery.validate.js',
        'dashmix/js/pages/op_auth_signin.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}


