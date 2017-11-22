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
	$this->dispatcher->addListener('captcha.hello', function(){
			echo 'event';
		});
	$result = $this->captcha->hello();
	return $response->write($result);
});

$app->get('/captcha/show/[{token}]', function(Request $request, Response $response, array $args){
	return $response->write('good');
});

$app->get('/captcha/code/[{token}]', function(Request $request, Response $response, array $args){
	return $response->write('good');
});
