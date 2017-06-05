<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DaterangepickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-daterangepicker';
    public $css = [];
    public $js = [
        'daterangepicker.js'
    ];
    public $depends = [];
}
