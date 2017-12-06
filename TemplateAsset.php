<?php

namespace tusharug\mailtemplates;

use Yii;
use yii\web\AssetBundle;

class TemplateAsset extends AssetBundle
{

    public $sourcePath = '@tusharug-assets';
    // public $css = [
    //     'css/site.css',
    // ];
    public $js = [
    	'js/jquery.js',
    	'js/jquery_validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}

