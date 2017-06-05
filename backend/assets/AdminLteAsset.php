<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'bootstrap/css/bootstrap.css',
        'dist/css/AdminLTE.min.css',
        'plugins/iCheck/square/blue.css'
    ];
    public $js = [
//        'plugins/jQuery/jquery-2.2.3.min.js',
        'bootstrap/js/bootstrap.min.js',
        'plugins/iCheck/icheck.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'backend\assets\JqueryUIAsset',
        'backend\assets\RaphaeljsAsset',
        'backend\assets\MorrisjsAsset',
        'backend\assets\JvectormapAsset',
        'backend\assets\JqueryKnobAsset',
        'backend\assets\MomentAsset',
        'backend\assets\DaterangepickerAsset',
        'backend\assets\DatepickerAsset',
        'backend\assets\WysihtmlAsset'
    ];
}
