<?php

namespace App\Routes;

use App\Controllers\Admin\DashboardController;


// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [
  ['GET', '/', DashboardController::class . '@index'],
];