<?php

namespace Ctwj\Captcha;

use Ctwj\Captcha\Adapter\KanAdapter;

class Factory
{

	public $config = [];
	public static $adapter = null;

	public function __construct( $config )
	{
		$this->config = $config;
	}


	public function getInstance()
	{
		if ( is_null(self::$adapter) ) {
			self::$adapter = KanAdapter::getInstance($this->config);
		}
		return self::$adapter;
	}
}