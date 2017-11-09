<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // json web token
        'jwt_key'   => 'captcha_json_web_token_secrect_key',

        // captcha config
        'captcha' => [
            'max-length' => 6,    //max captcha length
            'min-length' => 4,    //min captcha length
            'width'      => 160,
            'heigth'     => 60,
            'logic_type' => false,
            'zh-cn'      => false,  //is include chinese captcha?
        ],
    ],
];
