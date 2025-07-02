<?php

namespace App\Routes;

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\ProjectController;
use App\Controllers\Admin\StakeController;
use App\Controllers\Admin\RateController;
use App\Controllers\Admin\SalaryController;
use App\Controllers\Admin\ReportController;
use App\Controllers\Admin\TimelineController;

// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [

  ['GET', '/', DashboardController::class . '@index', 'name' => 'dashboard'],

  ['GET', '/projects', ProjectController::class . '@index', 'name' => 'projects'],
  ['GET', '/stakes', StakeController::class . '@index', 'name' => 'stakes'],
  ['GET', '/rates', RateController::class . '@index', 'name' => 'rates'],
  ['GET', '/salary', SalaryController::class . '@index', 'name' => 'salary'],
  ['GET', '/reports', ReportController::class . '@index', 'name' => 'reports'],
  ['GET', '/timeline', TimelineController::class . '@index', 'name' => 'timeline'],
  ['GET', '/payment-models', \App\Controllers\Admin\PaymentModelController::class . '@index', 'name' => 'payment_models'],
  ['GET', '/investments', \App\Controllers\Admin\InvestmentController::class . '@index', 'name' => 'investments'],
  ['GET', '/payouts', \App\Controllers\Admin\PayoutController::class . '@index', 'name' => 'payouts'],


];
