<?php

class Router {

  public function dispatch($uri) {

    // URI
    $uri = parse_url($uri, PHP_URL_PATH); // drop query string
    $uri = trim($uri, "/"); // trailing slash

    // Default Route
    if ($uri == "") {
      $uri = "home/index"; // default route
    }

    // Auto-Determine Controller
    $parts = explode("/", $uri);
    $controllerName = ucfirst(array_shift($parts) ?: "Home") . "Controller";
    $actionName = array_shift($parts) ?: "index";
    $params = $parts;

    // Validate Controller (return 404 as fallback)
    if (!class_exists($controllerName)) {
      http_response_code(404);
      echo "Controller not found.";
      return;
    }

    // Instantiate Controller
    $controller = new $controllerName();

    // Validate Method (404 as fallback)
    if (!method_exists($controller, $actionName)) {
      http_response_code(404);
      echo "Action not found.";
      return;
    }

    // Call method
    call_user_func_array([$controller, $actionName], $params);
  
  }

}