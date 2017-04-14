<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class IoniconsAsset extends AssetBundle
{
    public $sourcePath = '@bower/Ionicons';
    public $css = [
        'css/ionicons.min.css'
    ];
    public $js = [
    ];
    public $depends = [];
}
