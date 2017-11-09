<?php

use Slim\Http\Request;
use Slim\Http\Response;

use Ctwj\Captcha;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/captcha/[{token}]', function(Request $request, Response $response, array $args){
	$captcha = new Ctwj\Captcha\Captcha();
	return $response->write('good');
});

$app->get('/captcha/show/[{token}]', function(Request $request, Response $response, array $args){
	return $response->write('good');
});

$app->get('/captcha/code/[{token}]', function(Request $request, Response $response, array $args){
	return $response->write('good');
});
