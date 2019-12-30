<?php

namespace toir427\nestable;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor/toir427/yii2-nestable/dist';

    public $css = [
        'css/jquery.nestable.css',
    ];

    public $js = [
        'js/jquery.nestable.js',
        'js/scripts.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
