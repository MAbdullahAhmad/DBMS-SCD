<?php

namespace Core;

use Core\Exceptions\InvalidRouteDefinition;

use function Core\Util\render;
use function Core\Util\config;


/**
 * Router class for handling HTTP routing, middleware, and dispatching.
 *
 * Supports route grouping, nested middleware, URL parameter matching (e.g. {{id}}),
 * and dynamic route URL generation.
 *
 * @package Core
 */
class Router {

  // ----------
  // Properties
  // ----------

  protected $routes = [];
  protected $error_pages = [];


  // -----------
  // Constructor
  // -----------

  /**
   * Router constructor.
   *
   * @param array $config        Array of route definitions.
   * @param array $error_pages   Optional array of custom error page views (by status code).
   */
  public function __construct($config, $error_pages = []) {
    $this->routes = $this->flatten_routes($config);
    $this->error_pages = $error_pages;
  }
  

  // --------
  // Dispatch
  // --------

  /**
   * Dispatches the current request to the appropriate controller action.
   *
   * Matches URI and method, resolves parameters, executes middleware stack, and calls action.
   *
   * @param string $uri    Request URI.
   * @param string $method HTTP method (GET, POST, etc).
   */
  public function dispatch($uri, $method) {
    $uri = rtrim(parse_url($uri, PHP_URL_PATH), '/') ?: '/'; // clean URI
    $method = strtoupper($method); // normalize method

    foreach ($this->routes as $route) {

      // Match method + URI
      if ($route['method'] === $method) {
        $pattern = preg_replace('#\{\{([a-zA-Z_][a-zA-Z0-9_]*)\}\}#', '(?P<$1>[^/]+)', $route['uri']);
        $pattern = "#^" . $pattern . "$#";
      
        if (preg_match($pattern, $uri, $matches)) {
          $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
      
          if (!class_exists($route['controller'])) {
            $this->error(404); echo "Controller class not found."; return;
          }
      
          $controller = new $route['controller']();
      
          if (!method_exists($controller, $route['action'])) {
            $this->error(404); echo "Method not found."; return;
          }
      
          // Middleware handling remains same
          if (!empty($route['middleware'])) {
            $middlewares = is_array($route['middleware']) ? $route['middleware'] : [$route['middleware']];
            $handler = fn() => $controller->{$route['action']}(...array_values($params));
      
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
      
          return $controller->{$route['action']}(...array_values($params));
        }
      }
    }

    // No match found
    http_response_code(404);
    echo "Route not found.";
  }

  // -----------------
  // Getters / Setters
  // -----------------

  /**
   * Generates a full URL from a named route and parameter values.
   *
   * Supports associative, positional, and single-value parameter forms.
   *
   * @param string $name        The name of the route.
   * @param mixed  $params      Parameters to replace in the route URI.
   * @return string             Fully qualified URL.
   *
   * @throws \Exception         If route name is not found.
   */
  public function getRouteUrl($name, $params = []) {
    foreach ($this->routes as $route) {
      if ($route['name'] === $name) {
        $uri = $route['uri'];
  
        // Normalize params
        if (!is_array($params)) {
          $params = [$params];
        }
  
        // Extract param names from URI
        preg_match_all('/\{\{(.*?)\}\}/', $uri, $matches);
        $paramNames = $matches[1];
  
        $replacements = [];
  
        // Handle associative or positional replacement
        foreach ($paramNames as $index => $key) {
          $replacements["{{{$key}}}"] = array_key_exists($key, $params)
            ? $params[$key]
            : ($params[$index] ?? '');
        }
  
        $uri = strtr($uri, $replacements);
  
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
  
        return rtrim("$scheme://$host", '/') . '/' . ltrim($uri, '/');
      }
    }
  
    throw new \Exception("Route named '$name' not found.");
  }


  // -----------------
  // Utility & Private
  // -----------------

  /**
   * Flattens nested/grouped routes into a single-level array with inherited prefix/controller/middleware.
   *
   * @param array       $routes      Routes to flatten.
   * @param string      $prefix      URI prefix to apply to all child routes.
   * @param string|null $controller  Default controller to apply if not set.
   * @param array       $middleware  Middleware stack to inherit.
   *
   * @return array                   Flat array of route definitions.
   */
   private function flatten_routes($routes, $prefix = '', $controller = null, $middleware = [], $namePrefix = ''){
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
        $childNamePrefix = isset($r['name']) ? $namePrefix . $r['name'] : $namePrefix;

        $flat = array_merge(
          $flat,
          $this->flatten_routes($r['group'], $subPrefix, $subController, $mergedMiddleware, $childNamePrefix)
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
          'method'     => $method,
          'uri'        => rtrim($prefix . '/' . trim($uri, '/'), '/') ?: '/',
          'controller' => $routeController,
          'action'     => $action,
          'middleware' => $finalMiddleware,
          'name' => isset($r['name']) ? $namePrefix . $r['name'] : ($namePrefix . ($r[4] ?? '')),
        ];
      }
    }
  
    return $flat;
  }

  /**
   * Renders a given error code view if available or outputs plain error message.
   *
   * @param int $code  HTTP status code to render (e.g. 404, 500).
   */
  private function error($code) {
    http_response_code($code);
    if (isset($this->error_pages[$code])) {
      return render($this->error_pages[$code]);
    } else {
      echo "Error $code";
    }
  }

  /**
   * Validates and returns a single route definition (group or route).
   *
   * @param array $route  Raw route array definition.
   * @return array        Parsed and validated route.
   *
   * @throws InvalidRouteDefinition
   */
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

  /**
   * Parses middleware parameters from colon-separated alias (e.g. "auth:role=admin").
   *
   * @param string $paramStr  Raw parameter string.
   * @return array            Tuple of [args, kwargs].
   */
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