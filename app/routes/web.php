<?php

namespace App\Routes;

use App\Controllers\HomeController;


// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [
  ['GET', '/', HomeController::class . '@index', 'role:role=any'],
];