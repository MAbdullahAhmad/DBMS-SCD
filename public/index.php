<?php

define('ROOT_DIR', dirname(__DIR__));

// Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

require ROOT_DIR . '/autoload.php';
$api_routes = require ROOT_DIR . '/app/routes/api.php';
$web_routes = require ROOT_DIR . '/app/routes/web.php';

$routes = [
  [
    'prefix' => '/api',
    'group' => $api_routes,
    'middleware' => 'api'
  ],
  ...$web_routes,
];

use Core\Router;

// Setup Routes
$router = new Router($routes);

// Dispatch request
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
