<?php
namespace sammaye\qtip;

use Yii;
use yii\web\AssetBundle;

class QtipAsset extends AssetBundle
{
	public $sourcePath = __DIR__;
	public $css = ['jquery.qtip.css'];
	public $js = ['jquery.qtip.js'];
	public $depends = [
		'yii\web\JqueryAsset'
	];	
}