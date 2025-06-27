<?php

// ----------
// Autoloader
// ----------

spl_autoload_register(function ($class) {
  $map = [
      'Core\\' => ROOT_DIR . '/core/',
      'App\\'  => ROOT_DIR . '/app/',
  ];

  foreach ($map as $prefix => $dir) {
    if (!str_starts_with($class, $prefix)) continue;
    $file = $dir . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (file_exists($file)) {
      require $file;
      return;
    }
  }
});


// ----------
// Load utility files (excluding globals* first)
// ----------

$utils = glob(ROOT_DIR . '/core/util/' . '*.php');

// First: load all files except those starting with "globals"
foreach ($utils as $file) {
  if (basename($file) === 'globals.php' || str_starts_with(basename($file), 'globals_')) continue;
  require_once $file;
}

// Then: load globals and globals_* files
foreach ($utils as $file) {
  if (basename($file) === 'globals.php' || str_starts_with(basename($file), 'globals_')) {
    require_once $file;
  }
}

require_once ROOT_DIR . '/core/util/globals.php';