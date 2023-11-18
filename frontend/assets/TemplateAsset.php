<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assetstemplate/assets/plugins/chartist-js/dist/chartist.min.css',
        'assetstemplate/assets/plugins/chartist-js/dist/chartist-init.css',
        'assetstemplate/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css',
        'assetstemplate/assets/plugins/c3-master/c3.min.css',
    ];
    public $js = [
        'assetstemplate/assets/plugins/jquery/dist/jquery.min.js',
        'assetstemplate/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js',
        'assetstemplate/assets/plugins/chartist-js/dist/chartist.min.js',
        'assetstemplate/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js',
        'assetstemplate/assets/plugins/d3/d3.min.js',
        'assetstemplate/assets/plugins/c3-master/c3.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}







