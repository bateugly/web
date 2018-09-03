<?php 
namespace frontend\assets;

use yii\web\AssetBundle;

class CssAsset extends AssetBundle
{

	public $sourcePath = '@bower/css';
	// public $css = ['css.css',];
	public $js = [

			
			
	];

	public $depends = [
		'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
	];
}