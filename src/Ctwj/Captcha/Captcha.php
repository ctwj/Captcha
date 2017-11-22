<?php

namespace Ctwj\Captcha;

use Ctwj\Plugin\CaptchaBeforeEvents;
use Symfony\Component\EventDispatcher\Event;

class Captcha{

	public $str = '';
	public $config = [];
	public $instance = null;
	private $dispatcher;

	public function __construct($config, $dispatcher=null)
	{
		$this->config = $config;
		$this->dispatcher = $dispatcher;
		$factory = new Factory($config);
		$this->instance = $factory->getInstance();
	}

	public function hello()
	{
		$this->dispatcher->dispatch(CaptchaBeforeEvents::CAPTCHA_BEFORE, new Event());
		echo 'good captcha';
		$this->dispatcher->dispatch(CaptchaBeforeEvents::CAPTCHA_AFTER, new Event());
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