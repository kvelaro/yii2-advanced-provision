<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class JqueryKnobAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-knob';
    public $css = [];
    public $js = [
        'js/jquery.knob.js'
    ];
    public $depends = [];
}
