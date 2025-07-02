<?php

namespace Core;

use Core\Exceptions\InvalidRouteDefinition;

use function Core\Util\render;
use function Core\Util\config;

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
    $this->routes = $this->flatten_routes($config);
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
          $handler = fn() => (new $route['controller'])->{$route['action']}();

          foreach ($middlewares as $mwDef) {
            if (is_string($mwDef)) {
              // Alias with args, like 'auth:role=admin'
              $explode = explode(':', $mwDef . ':');
              [$alias, $params] = explode(':', $mwDef . ':');
              $middlewareClass = config("middleware.aliases.$alias", '');
              [$args, $kwargs] = $this->parse_mw_params($params);
            } elseif (is_array($mwDef)) {
              $middlewareClass = $mwDef[0];
              $args = $mwDef['args'] ?? [];
              $kwargs = $mwDef['kwargs'] ?? [];
            } else {
              $middlewareClass = $mwDef;
              $args = [];
              $kwargs = [];
            }

            if (!class_exists($middlewareClass)) {
              $this->error(500);
              echo "Middleware class not found: $middlewareClass in mwDef: $mwDef";
              return;
            }

            $middleware = new $middlewareClass();
            if (!method_exists($middleware, 'handle')) {
              $this->error(500);
              echo "Middleware missing handle method: $middlewareClass";
              return;
            }

            $prevHandler = $handler;
            $handler = fn() => $middleware->handle($prevHandler, ...$args, ...$kwargs);
          }

          return $handler();
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

  // // flatten_routes nested route config into a flat list of routes
  // private function flatten_routes($routes, $prefix = '', $controller = null, $middleware = null) {
  //   $flat = [];

  //   foreach ($routes as $r) {
  //     $r = $this->parse_route($r);

  //     // Group case
  //     if (isset($r['routes'])) {
  //       $subPrefix     = isset($r['prefix']) ? $prefix . $r['prefix'] : $prefix;
  //       $subController = $r['controller'] ?? $controller;
  //       $subMiddleware = $r['middleware'] ?? $middleware;

  //       // Recursively flatten_routes
  //       $flat = array_merge($flat, $this->flatten_routes($r['routes'], $subPrefix, $subController, $subMiddleware));
  //     }

  //     // Single route case
  //     else {
  //       [$method, $uri, $handler] = $r;
  //       $routeController = $controller;
  //       $action = $handler;

  //       // Handle Controller@action format
  //       if ($handler && (strpos($handler, '@') !== false)) {
  //         [$routeController, $action] = explode('@', $handler);
  //       }

  //       // Add to flat list
  //       $flat[] = [
  //         'method'     => $method,
  //         'uri'        => rtrim($prefix . $uri, '/') ?: '/',
  //         'controller' => $routeController,
  //         'action'     => $action,
  //         'middleware' => $r[3] ?? $middleware,
  //         'name'       => $r[4] ?? null,
  //       ];
  //     }
  //   }

  //   return $flat;
  // }

  private function flatten_routes($routes, $prefix = '', $controller = null, $middleware = []) {
    $flat = [];
  
    foreach ($routes as $r) {
      $r = $this->parse_route($r);
  
      // Group case
      if (isset($r['group'])) {
        $subPrefix   = isset($r['prefix']) ? rtrim($prefix . '/' . trim($r['prefix'], '/'), '/') : $prefix;
        $subController = $r['controller'] ?? $controller;
  
        // Merge middlewares (group + parent)
        $groupMiddleware = $r['middleware'] ?? [];
        $mergedMiddleware = array_merge(
          is_array($middleware) ? $middleware : [$middleware],
          is_array($groupMiddleware) ? $groupMiddleware : [$groupMiddleware]
        );
  
        // Recurse
        $flat = array_merge(
          $flat,
          $this->flatten_routes($r['group'], $subPrefix, $subController, $mergedMiddleware)
        );
      }
  
      // Single route case
      else {
        [$method, $uri, $handler] = $r;
        $routeController = $controller;
        $action = $handler;
  
        if ($handler && strpos($handler, '@') !== false) {
          [$routeController, $action] = explode('@', $handler);
        }
  
        // Merge route middleware if defined
        $routeMiddleware = $r[3] ?? [];
        $finalMiddleware = array_merge(
          is_array($middleware) ? $middleware : [$middleware],
          is_array($routeMiddleware) ? $routeMiddleware : [$routeMiddleware]
        );
  
        $flat[] = [
          'method'   => $method,
          'uri'    => rtrim($prefix . '/' . trim($uri, '/'), '/') ?: '/',
          'controller' => $routeController,
          'action'   => $action,
          'middleware' => $finalMiddleware,
          'name'     => $r[4] ?? null,
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

  private function parse_route(array $route){
    // Validate

    $required_fields = [
      // key => index (null menas it cannot be defined via an index)
      'method' => 0,
      'uri' => 1,
      'handler' => 2,
      'middlewaer' => 3,
      'name' => 4,
      'routes' => null,
      'prefix' => null,
    ];

    if(
      !array_key_exists('group', $route) &&
      !(array_key_exists('method', $route) || array_key_exists(0, $route))
    ){
      throw new InvalidRouteDefinition("Key 'method' not found in route definition: " . json_encode($route));
    }

    return $route;
  }

  private function parse_mw_params($paramStr) {
    $args = [];
    $kwargs = [];

    foreach (explode(',', $paramStr) as $pair) {
      if (str_contains($pair, '=')) {
        [$k, $v] = explode('=', $pair);
        $kwargs[trim($k)] = trim($v);
      } elseif (trim($pair)) {
        $args[] = trim($pair);
      }
    }

    return [$args, $kwargs];
  }

}
