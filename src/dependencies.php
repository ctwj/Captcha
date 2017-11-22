<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['dispatcher'] = function ( $c ) {
    $dispatcher = new Symfony\Component\EventDispatcher\EventDispatcher();
    return $dispatcher;
};

// captcha
$container['captcha'] = function ( $c ) use ( $container ) {
	$settings = $c->get('settings')['captcha'];
    $dispatcher = $container->dispatcher;
	$captcha = new Ctwj\Captcha\Captcha($settings, $dispatcher);
	return $captcha;
};



