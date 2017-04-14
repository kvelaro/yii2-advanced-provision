<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class Html5shivAsset extends AssetBundle
{
    public $sourcePath = '@bower/html5shiv';
    public $css = [];
    public $js = [
        'dist/html5shiv.js'
    ];
    public $jsOptions = [
        'condition' => 'lte IE9'
    ];
    public $depends = [];
}
