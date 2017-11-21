<?php

namespace Ctwj\Captcha\Adapter;

use Ctwj\Captcha\CaptchaInterface;
use Chinesecaptcha;

class KanAdapter extends Chinesecaptcha\Chinesecaptcha implements CaptchaInterface {

	private $instance = null;

	public function __construct()
	{
		$this->instance = new  Chinesecaptcha\Chinesecaptcha();
	}

	/**
	*	是否需要自己生成字符串
	*/
	private static $createStrSelf = true; 	

	public final static function getInstance($config)
	{
		if ( is_null(self::$instance) ) {
			self::$config 	= $config;
			self::$instance = new KanAdapter();
			self::$instance->build($config['width'],$config['heigth']);
		}
		return self::$instance;
	}


	/**
	*	设置字符串
	*/
	public static final function createStr( $str )
	{
		$newStr = self::getInstance()->createText(self::$config['length']);
		return $newStr;
	}

	/**
	*	生成图片
	*/
	public static final function createImage( $str="" )
	{
		self::getInstance()->outPut();
	}



}
