<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DatepickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker';
    public $css = [];
    public $js = [
        'js/bootstrap-datepicker.js'
    ];
    public $depends = [];
}
