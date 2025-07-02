<?php

namespace Core\Util;

/**
 * Outputs a JSON response with optional headers.
 *
 * @param mixed $data            Data to be JSON-encoded.
 * @param bool  $set_headers     Whether to set JSON and CORS headers (default: true).
 */
function json($data, $set_headers = true) {
  if ($set_headers) {
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
  }

  echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
  exit;
}
