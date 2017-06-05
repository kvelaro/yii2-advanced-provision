<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class JqueryUIAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-ui';
    public $css = [];
    public $js = [
        'jquery-ui.js'
    ];
    public $depends = [];
}
