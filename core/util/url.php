<?php

namespace Core\Util;

function url($path = '') {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

  return rtrim("$scheme://$host", '/') . '/' . ltrim($path, '/');
}
