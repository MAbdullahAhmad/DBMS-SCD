<?php

namespace Core;

use function Core\Util\render;

class Controller {
  public function render($view, $data = []) {
    render($view, $data);
  }
}
