<?php

namespace App;

use App\Controllers\HomeController;

return [
  ['GET', '/', HomeController::class . '@index'],
];