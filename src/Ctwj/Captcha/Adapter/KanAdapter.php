<?php

namespace Ctwj\Captcha\Adapter;

use Ctwj\Captcha\CaptchaInterface;
use Chinesecaptcha;

class KanAdapter implements CaptchaInterface {

	private $instance = null;

	public function __construct()
	{
		$this->instance = new  Chinesecaptcha\Chinesecaptcha();
	}

	/**
	*	自己生成字符串
	*/
	function generaterStr( $config )
	{

	}

	/**
	*	设置字符串
	*/
	function setStr( $str )
	{

	}

	/**
	*	生成图片
	*/
	function createImage( $str="" )
	{
		
	}

}