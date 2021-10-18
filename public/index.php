<?php

/**
 * Initialization of Framework
 */
require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\FrontController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', [FrontController::class, 'renderContact']);
$app->router->post('/contact', [FrontController::class, 'handlePost']);

$app->run();
