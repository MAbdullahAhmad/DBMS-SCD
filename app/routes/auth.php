<?php

namespace App\Routes;

// ______________________________________________________
// | METHOD | PATH | CONTROLLER | METHOD | [MIDDLEWARE] |
// ``````````````````````````````````````````````````````

return [

  // Login
  [
    'name' => 'login.',
    'prefix' => '/login',
    'middleware' => 'role:guest',
    'group' => [
      ['GET', '/', 'login_form', 'name' => 'form'],
      ['POST', '/', 'login', 'name' => 'submit'],
    ],
  ],

  // Logout
  ['GET', '/logout', 'logout', 'name' => 'logout'],
];