<?php

namespace Core\Util;

global $router;

function route($name, $params = []) {
  global $router;
  return $router->getRouteUrl($name, $params);
}
