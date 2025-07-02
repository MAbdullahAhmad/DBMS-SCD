<?php

namespace App\Routes;

use App\Controllers\Employee\DashboardController;
use App\Controllers\Employee\SalaryController;
use App\Controllers\Employee\ProjectController;
use App\Controllers\Employee\TimelineController;

// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [

  ['GET', '/', DashboardController::class . '@index', 'name' => 'dashboard'],

  ['GET', '/salary', SalaryController::class . '@index', 'name' => 'salary'],
  ['GET', '/projects', ProjectController::class . '@index', 'name' => 'projects'],
  ['GET', '/timeline', TimelineController::class . '@index', 'name' => 'timeline'],
  ['GET', '/shares', \App\Controllers\Employee\ShareController::class . '@index', 'name' => 'shares'],
  ['GET', '/payouts', \App\Controllers\Employee\PayoutController::class . '@index', 'name' => 'payouts'],


];
