<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class WysihtmlAsset extends AssetBundle
{
    public $sourcePath = '@bower/wysihtml5x';
    public $css = [];
    public $js = [
        'dist/wysihtml5x.js'
    ];
    public $depends = [];
}
