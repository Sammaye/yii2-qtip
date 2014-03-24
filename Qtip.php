<?php

namespace sammaye\qtip;

use Yii;
use \Exception;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;
use sammaye\qtip\QtipAsset;

class Qtip extends Widget
{
	public $hook;
	public $options = [];
	
	public function __get($k)
	{
		try{
			return parent::__get($k);
		}catch(Exception $e){
			return isset($this->options[$k]) ? $this->options[$k] : null;
		}
	}
	
	public function __set($k, $v)
	{
		try{
			parent::__set($k, $v);
		}catch(Exception $e){
			$this->options[$k] = $v;
		}
	}
	
	public function run()
	{
		QtipAsset::register($this->getView());
		$this->getView()->registerJs("$('$this->hook').qtip(" . Json::encode($this->options) . ");");
	}
}