<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class JvectormapAsset extends AssetBundle
{
    public $sourcePath = '@bower/bower-jvectormap';
    public $css = [
        'jquery-jvectormap-1.2.2.css'
    ];
    public $js = [
        'jquery-jvectormap-1.2.2.min.js',
        'jquery-jvectormap-world-mill-en.js'
    ];
    public $depends = [];
}
