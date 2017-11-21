<?php

namespace Ctwj\Captcha;


class Captcha{

	public $str = '';
	public $config = [];
	public $instance = null;

	public function __construct($config)
	{
		$this->config = $config;
		$factory = new Factory($config);
		$this->instance = $factory->getInstance();
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
		$this->instance->save();
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