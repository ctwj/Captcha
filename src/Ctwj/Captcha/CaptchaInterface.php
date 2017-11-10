<?php

namespace Ctwj\Captcha;

Interface CaptchaInterface
{
	/**
	*	自己生成字符串
	*/
	function generaterStr( $config );

	/**
	*	设置字符串
	*/
	function setStr( $str );

	/**
	*	生成图片
	*/
	function createImage( $str="" );
}