<?php

define('ENV_PATH', ROOT_DIR . '/.env');

// Global env array
$env = [];

/**
 * Get env value by key
 * @param string $key
 * @param mixed $default
 * @return mixed
 */
function env($key, $default = null) {
  global $env;
  return $env[$key] ?? $default;
}

/**
 * Parse an .env file path into key-value pairs
 * @param string $path
 * @return array
 */
function parse_env($path) {
  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $data = [];

  foreach ($lines as $line) {
    // Skip comments
    if (str_starts_with(trim($line), '#')) continue;

    // Get Key & Value
    [$key, $value] = explode('=', $line, 2);

    // Add to array
    $data[trim($key)] = trim($value);
  }

  return $data;
}

// Load .env
$env = parse_env(ENV_PATH);