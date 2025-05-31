<?php

namespace Core;
use function Core\Util\render;

class Router {

  // ----------
  // Properties
  // ----------

  protected $routes = [];
  protected $error_pages = [];


  // -----------
  // Constructor
  // -----------

  public function __construct($config, $error_pages = []) {
    $this->routes = $this->flatten($config);
    $this->error_pages = $error_pages;
  }
  

  // --------
  // Dispatch
  // --------

  // Main dispatcher: matches request to route and executes
  public function dispatch($uri, $method) {
    $uri = rtrim(parse_url($uri, PHP_URL_PATH), '/') ?: '/'; // clean URI
    $method = strtoupper($method); // normalize method

    foreach ($this->routes as $route) {

      // Match method + URI
      if ($route['method'] === $method && $route['uri'] === $uri) {
        if (!class_exists($route['controller'])) {
          $this->error(404);
          echo "Controller class not found.";
          return;
        }
        
        $controller = new $route['controller']();
        
        if (!method_exists($controller, $route['action'])) {
          $this->error(404);
          echo "Method not found.";
          return;
        }
        
        // Run middleware(s)
        if (!empty($route['middleware'])) {

          $middlewares = is_array($route['middleware']) ? $route['middleware'] : [$route['middleware']];
          foreach ($middlewares as $mwClass) {
            if (!class_exists($mwClass)) {
              $this->error(500);
              echo "Middleware class not found: $mwClass";
              return;
            }

            $mw = new $mwClass();
            if (!method_exists($mw, 'handle')) {
              $this->error(500);
              echo "Middleware method 'handle' not found in: $mwClass";
              return;
            }

            $mw->handle();
          }

        }

        return (new $route['controller'])->{$route['action']}();
      }
    }

    // No match found
    http_response_code(404);
    echo "Route not found.";
  }

  // -------
  // Utility
  // -------

  // Flatten nested route config into a flat list of routes
  private function flatten($routes, $prefix = '', $controller = null, $middleware = null) {
    $flat = [];

    foreach ($routes as $r) {

      // Group case
      if (isset($r['routes'])) {
        $subPrefix     = isset($r['prefix']) ? $prefix . $r['prefix'] : $prefix;
        $subController = $r['controller'] ?? $controller;
        $subMiddleware = $r['middleware'] ?? $middleware;

        // Recursively flatten
        $flat = array_merge($flat, $this->flatten($r['routes'], $subPrefix, $subController, $subMiddleware));
      }

      // Single route case
      else {
        [$method, $uri, $handler] = $r;
        $routeController = $controller;
        $action = $handler;

        // Handle Controller@action format
        if (strpos($handler, '@') !== false) {
          [$routeController, $action] = explode('@', $handler);
        }

        // Add to flat list
        $flat[] = [
          'method'     => $method,
          'uri'        => rtrim($prefix . $uri, '/') ?: '/',
          'controller' => $routeController,
          'action'     => $action,
          'middleware' => $r[3] ?? $middleware,
          'name'       => $r[4] ?? null,
        ];
      }
    }

    return $flat;
  }

  private function error($code) {
    http_response_code($code);
    if (isset($this->error_pages[$code])) {
      return render($this->error_pages[$code]);
    } else {
      echo "Error $code";
    }
  }

}
