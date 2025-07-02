<?php

namespace App\Middleware;

use Core\Middleware;

class APIMiddleware extends Middleware {

  public function handle($next, $role=null) {
    return $next();
  }

}
