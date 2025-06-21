<?php

define('ROOT_DIR', dirname(__DIR__));

// Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

require ROOT_DIR . '/autoload.php';
$routes = require_once ROOT_DIR . '/app/routes.php';

use Core\Router;

// Setup Routes
$router = new Router($routes);

// Dispatch request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
