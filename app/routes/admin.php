<?php

namespace App\Routes;

use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\ProjectController;
use App\Controllers\Admin\StakeController;
use App\Controllers\Admin\RateController;
use App\Controllers\Admin\SalaryController;
use App\Controllers\Admin\TimelineController;
use App\Controllers\Admin\MetaController;
use App\Controllers\Admin\AdminAccountController;

// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [

  ['GET', '/', DashboardController::class . '@index', 'name' => 'dashboard'],

  ['GET', '/projects', ProjectController::class . '@index', 'name' => 'projects'],

  [
    'prefix' => '/stakes',
    'name' => 'stakes.',
    'controller' => StakeController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/save', 'save', 'name' => 'save'],
    ],
  ],
  
  // Rates
  [
    'prefix' => '/rates',
    'name' => 'rates.',
    'controller' => RateController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/save', 'save', 'name' => 'save'],
    ],
  ],
  
  [
    'prefix' => '/salaries',
    'name' => 'salaries.',
    'controller' => SalaryController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/generate', 'generate', 'name' => 'generate'],
      ['GET', '/slip', 'slip', 'name' => 'slip'],
      ['POST', '/adjustment', 'add_adjustment', 'name' => 'add_adjustment'],
    ],
  ],

  [
    'prefix' => '/meta',
    'name' => 'meta.',
    'controller' => MetaController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/store', 'store', 'name' => 'store'],
      ['POST', '/update', 'update', 'name' => 'update'],
      ['POST', '/delete', 'delete', 'name' => 'delete'],
    ],
  ],
  
  // Timeline
  [
    'prefix' => '/timeline',
    'name' => 'timeline.',
    'controller' => TimelineController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
    ]
  ],

  // Account
  [
    'prefix' => '/account',
    'name' => 'account.',
    'middleware' => 'role:admin',
    'controller' => AdminAccountController::class,
    'group' => [
      ['GET', '/', 'index', 'name' => 'index'],
      ['POST', '/update-profile', 'update_profile', 'name' => 'update'],
      ['POST', '/update-password', 'update_password', 'name' => 'password'],
    ],
  ],
  

];
