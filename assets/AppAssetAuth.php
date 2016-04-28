<?php
//for layout/auth.php

namespace app\assets;


use yii\web\AssetBundle;

class AppAssetAuth extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/AdminLTE.css',
        'css/auth.css',
    ];
    public $js = [
        'js/auth.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}