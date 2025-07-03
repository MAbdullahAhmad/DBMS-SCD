<?php

namespace App\Routes;

use App\Controllers\Employee\DashboardController;
use App\Controllers\Employee\SalaryController;
use App\Controllers\Employee\TimelineController;
use App\Controllers\Employee\EmployeeAccountController;


// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````


return [

  // Dashboard
  ['GET', '/', DashboardController::class . '@index', 'name' => 'dashboard'],

  // Salary
  ['GET', '/salary', SalaryController::class . '@index', 'name' => 'salary'],
  ['GET', '/salary/slip', SalaryController::class . '@slip', 'name' => 'salary.slip'],

  // Timeline
  ['GET', '/timeline', TimelineController::class . '@index', 'name' => 'timeline'],

  // Account (grouped)
  [
    'prefix' => '/account',
    'name' => 'account.',
    'middleware' => 'role:employee',
    'controller' => EmployeeAccountController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/update-profile', 'update_profile', 'name' => 'update_profile'],
      ['POST', '/update-password', 'update_password', 'name' => 'update_password'],
    ],
  ],
  

];