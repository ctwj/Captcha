<?php

namespace Ctwj\Plugin\Example;

use Ctwj\Plugin\Plugin; 
use Ctwj\Plugin\CaptchaBeforeEvents;
use Symfony\Component\EventDispatcher\Event;

class Example extends Plugin {
	
	public function onCaptchaBefore(Event $event) {
		echo 'I\'m plugin<br>';
	}

	public static function install( $dispatcher )
	{
		$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_BEFORE, function(Event $event){
			self::onCaptchaBefore($event);
		});
	}

}