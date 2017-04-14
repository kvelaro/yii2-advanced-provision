<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class RespondAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond';
    public $css = [];
    public $js = [
        'dest/respond.min.js'
    ];
    public $jsOptions = [
        'condition' => 'lte IE9'
    ];
    public $depends = [];
}
