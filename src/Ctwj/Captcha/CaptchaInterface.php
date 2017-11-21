<?php

namespace Ctwj\Captcha;

Interface CaptchaInterface
{

	/**
	*	设置字符串
	*/
	public static function setStr( $str );

	/**
	*	生成图片
	*/
	public static function createImage( $str="" );
}