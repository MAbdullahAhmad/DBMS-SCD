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
  }

  echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
  exit;
}
