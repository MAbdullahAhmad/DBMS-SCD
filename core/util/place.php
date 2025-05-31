<?php

namespace Core\Util;

function place($name) {
  global $sections;
  echo $sections[$name] ?? '';
}
