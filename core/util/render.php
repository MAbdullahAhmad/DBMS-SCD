<?php

namespace Core\Util;

use function Core\Util\resolve_view_path;
use function Core\Util\layout;
use function Core\Util\place;
use function Core\Util\section;
use function Core\Util\endsection;

function render($view, $data = []) {
  global $layout, $sections;
  $layout = null;
  $sections = [];

  if (!empty($data)) {
    extract($data);
  }

  // Bind Core\Util functions to global scope if not already
  foreach (['layout', 'section', 'endsection', 'place', 'resolve_view_path'] as $fn) {
    if (!function_exists($fn)) {
      eval("function $fn(...\$args) { return \\Core\\Util\\$fn(...\$args); }");
    }
  }

  // Recursive parser + evaluator
  $render_view = function ($view_path, $data = []) use (&$render_view) {
    if (!file_exists($view_path)) {
      echo "View not found: $view_path";
      return '';
    }
  
    ob_start();
    require_once __DIR__ . '/globals_view.php';
  
    $parsed = file_get_contents($view_path);
    $parsed = preg_replace('/@layout\((.*?)\)/', '<?php layout($1); ?>', $parsed);
    $parsed = preg_replace('/@section\((.*?)\)/', '<?php section($1); ?>', $parsed);
    $parsed = preg_replace('/@endsection/', '<?php endsection(); ?>', $parsed);
    $parsed = preg_replace('/@place\((.*?)\)/', '<?php place($1); ?>', $parsed);
    $parsed = preg_replace('/{{\s*(.*?)\s*}}/', '<?= $$1 ?>', $parsed);

    // Inject variables and eval in local scope
    extract($data);
    eval('?>' . $parsed);
  
    return ob_get_clean();
  };

  $view_path = resolve_view_path($view);
  $content = $render_view(resolve_view_path($view), $data);

  // If layout used, render it recursively as well
  if ($layout) {
    $layout_path = resolve_view_path($layout);
    if ($layout_path) {
      echo $render_view($layout_path, $data);
    } else {
      echo "Layout file not found: $layout";
    }
  } else {
    echo $content;
  }
}
