<?php

// PHP Config to display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Add autoloader
spl_autoload_register(function($className) {
  if (file_exists(__DIR__ . "/../core/$className.php")) {
    require __DIR__ . "/../core/$className.php";
  }
  
  elseif (file_exists(__DIR__ . "/../app/controllers/$className.php")) {
    require __DIR__ . "/../app/controllers/$className.php";
  }
  
  elseif (file_exists(__DIR__ . "/../app/models/$className.php")) {
    require __DIR__ . "/../app/models/$className.php";
  }
});

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);