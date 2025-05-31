<?php

namespace Core\Util;

function resolve_view_path($view) {
  $path = __DIR__ . '/../../app/views/' . str_replace('.', '/', $view);
  if (file_exists($path . '.custom.php')) return $path . '.custom.php';
  if (file_exists($path . '.php')) return $path . '.php';
  return null;
}
