<?php

namespace App\Routes;

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\TestController;


// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````


return [

  // Guest Routes
  ['GET', '/', HomeController::class . '@index', 'role:role=any'],

  // Auth Routes
  [
    'name' => 'auth.',
    'controller' => AuthController::class,
    'group' => require __DIR__ . '/auth.php',
  ],

  // Admin Routes
  [
    'prefix' => '/admin',
    'middleware' => 'role:admin',
    'name' => 'admin.',
    'group' => require __DIR__ . '/admin.php',
  ],

  // Employee Routes
  [
    'prefix' => '/employee',
    'middleware' => 'role:employee',
    'name' => 'employee.',
    'group' => require __DIR__ . '/employee.php',
  ],

  // @debug
  ['GET', '/test/{{id}}', TestController::class . '@show_id', 'name' => 'test.id'],
];
