<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/megamenu.css',
        'css/flexslider.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/megamenu.js',
        'js/responsiveslides.min.js',
        'js/jquery.flexisel.js'
    ];
    public $jsOptions = [
        "position" => \yii\web\View::POS_HEAD,
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}


/*
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
 */