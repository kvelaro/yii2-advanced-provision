<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MorrisjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/morris.js';
    public $css = [
        'morris.css'
    ];
    public $js = [
        'morris.js'
    ];
    public $depends = [];
}
