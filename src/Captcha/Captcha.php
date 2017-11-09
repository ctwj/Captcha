<?php

namespace Ctwj\Captcha;

class Captcha{

	public $str = '';
	public $config = [];

	public function __construct($config)
	{
		$this->config = $config;
	}

	/**
	*	设置配置
	*/
	public function setConfig( $config )
	{
		$this->config  = $config;
	}

	public function hello()
	{
		echo 'good captcha';
	}


	/**
	*	保存图片
	*/
	public function save()
	{

	}

	/**
	*	获取code
	*/
	public function getCode()
	{

	}

	/**
	*	生成随机字符串
	*/
	private function generaterStr()
	{

	}
}