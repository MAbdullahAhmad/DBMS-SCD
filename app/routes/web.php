<?php

namespace App\Routes;

use App\Controllers\HomeController;
use App\Controllers\TestController;


// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [
  ['GET', '/', HomeController::class . '@index', 'role:role=any'],
  ['GET', '/test/{{id}}', TestController::class . '@show_id', 'name' => 'test.id']
];