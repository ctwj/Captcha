<?php

use Symfony\Component\EventDispatcher\Event;
use Ctwj\Plugin\CaptchaBeforeEvents;

$container = $app->getContainer();

$dispatcher = $container->dispatcher;
$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_BEFORE, function(){
	echo 'captcha.before<br>';
});

$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_BEFORE, function(){
	echo 'captcha.before1<br>';
});

$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_BEFORE, function(){
	echo 'captcha.before2<br>';
});

$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_AFTER, function(){
	echo 'captcha.after<br>';
});

$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_AFTER, function(){
	echo 'captcha.after1<br>';
});

$dispatcher->addListener(CaptchaBeforeEvents::CAPTCHA_AFTER, function(){
	echo 'captcha.after2<br>';
});

// Found Pulgin and Install it!
Ctwj\Plugin\Example\Example::install($dispatcher);