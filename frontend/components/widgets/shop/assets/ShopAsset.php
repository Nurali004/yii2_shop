<?php

namespace shop\assets;

use yii\web\AssetBundle;

class ShopAsset extends AssetBundle
{

    public $sourcePath = '@shop/assets';
    public $css = [
        'css/shop.css',
    ];
    public $js = [
        'js/shop.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];

}