<?php

/**
 * Initialization of Framework
 */
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');
$app->router->post('/contact', function () {
    echo "Handling Content...";
});

$app->run();
