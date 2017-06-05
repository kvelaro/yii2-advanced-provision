<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class RaphaeljsAsset extends AssetBundle
{
    public $sourcePath = '@bower/raphael';
    public $css = [
    ];
    public $js = [
        'raphael.js'
    ];
    public $depends = [];
}
