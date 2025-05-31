<?php

namespace Core\Util;

function section($name) {
  global $sections, $currentSection;
  $currentSection = $name;
  ob_start();
}

function endsection() {
  global $sections, $currentSection;
  $sections[$currentSection] = ob_get_clean();
  $currentSection = null;
}
