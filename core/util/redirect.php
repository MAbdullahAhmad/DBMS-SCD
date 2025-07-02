<?php

namespace Core\Util;

/**
 * Redirect to a given URL or route.
 *
 * @param string $to  URL or route name (with optional params).
 * @param array $params Optional route parameters if using a route name.
 */
function redirect($to, $params = []) {
  if (str_starts_with($to, '/')) {
    $url = url($to);
  } elseif (str_contains($to, '.')) {
    $url = route($to, $params);
  } else {
    $url = $to;
  }

  header("Location: $url");
  exit;
}
