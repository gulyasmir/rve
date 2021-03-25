<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/bootstrap.css',
        'css/fonts.css',
        'css/main.css',
        'css/media.css',
        'css/accordeon-menu.css',
        'libs/slick/slick.css',
        'css/social.css'

    ];
    public $js = [
      //'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
      'libs/slick/slick.min.js',
      'libs/nicescroll/dist/jquery.nicescroll.js',
      'libs/lightbox/dist/js/lightbox.js',
      'js/common.js',
        'js/accordeon-menu.js',
'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
