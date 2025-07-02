<?php

namespace App;

use App\Controllers\Api\Admin\TimeLogController;
use App\Controllers\Api\Admin\SalaryController as AdminSalaryController;
use App\Controllers\Api\Admin\StakeController;
use App\Controllers\Api\Admin\ProjectController;
use App\Controllers\Api\Admin\EmployeeController;
use App\Controllers\Api\Admin\ReportController;

use App\Controllers\Api\Employee\TimelineController as EmpTimelineController;
use App\Controllers\Api\Employee\SalaryController as EmpSalaryController;
use App\Controllers\Api\Employee\ProjectController as EmpProjectController;

// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [

  // Admin APIs
  [
    'prefix' => '/admin',
    'middleware' => 'role:admin',
    'group' => [
      ['GET', '/projects', ProjectController::class . '@all'],
      ['POST', '/timelogs', TimeLogController::class . '@store'],
      ['GET', '/stakes', StakeController::class . '@list'],
      ['GET', '/salary', AdminSalaryController::class . '@generate'],
      ['GET', '/employees', EmployeeController::class . '@list'],
      ['GET', '/reports', ReportController::class . '@get'],

      ['GET', '/payment-models', \App\Controllers\Api\Admin\PaymentModelController::class . '@list'],
      ['POST', '/payment-models', \App\Controllers\Api\Admin\PaymentModelController::class . '@store'],

      ['GET', '/investments', \App\Controllers\Api\Admin\InvestmentController::class . '@all'],
      ['POST', '/investments', \App\Controllers\Api\Admin\InvestmentController::class . '@add'],

      ['GET', '/payouts', \App\Controllers\Api\Admin\PayoutController::class . '@list'],
      ['POST', '/payouts', \App\Controllers\Api\Admin\PayoutController::class . '@pay'],

    ]
  ],

  // Employee APIs
  [
    'prefix' => '/employee',
    'middleware' => 'role:employee',
    'group' => [
      ['GET', '/timeline', EmpTimelineController::class . '@data'],
      ['GET', '/salary', EmpSalaryController::class . '@view'],
      ['GET', '/projects', EmpProjectController::class . '@assigned'],

      ['GET', '/shares', \App\Controllers\Api\Employee\ShareController::class . '@view'],
      ['GET', '/payouts', \App\Controllers\Api\Employee\PayoutController::class . '@history'],

    ]
  ],

];
