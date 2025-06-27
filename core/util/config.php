<?php

namespace Core\Util;

$app_config = require __DIR__ . '/../../app/config/index.php';

function config($key, $default = null) {
  global $app_config;
  $result = $app_config;

  $segments = explode('.', $key);
  foreach ($segments as $segment) {
    if (!is_array($result) || !array_key_exists($segment, $result)) {
        return $default;
    }
    $result = $result[$segment];
  }

  return $result;
}
