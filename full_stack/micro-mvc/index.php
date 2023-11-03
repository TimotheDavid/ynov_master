<?php

require './vendor/autoload.php';
use MVC\Controller\UserController;
use MVC\Router;


$uri = $_SERVER['REQUEST_URI'];

$router = new Router();
$router->addRoutes('/', UserController::class, 'index');

$router->dispatch($uri);
    