<?php

// Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../autoload.php';
$routes = require_once __DIR__ . '/../app/routes.php';

use Core\Router;

// Setup Routes
$router = new Router($routes);

// Dispatch request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
