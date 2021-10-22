<?php

/**
 * Initialization of Framework
 */
require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\FrontController;
use app\controllers\AuthController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [FrontController::class, 'renderHome']);
$app->router->get('/contact', [FrontController::class, 'renderContact']);
$app->router->post('/contact', [FrontController::class, 'handlePost']);

// Auth controllers
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);

// form submit post calls
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);


$app->run();
