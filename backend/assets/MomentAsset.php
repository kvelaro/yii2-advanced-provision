<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment';
    public $css = [];
    public $js = [
        'src/moment.js'
    ];
    public $depends = [];
}
