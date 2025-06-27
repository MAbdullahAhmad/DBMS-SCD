<?php

return [
  'aliases' => [
    'auth' => \App\Middleware\AuthMiddleware::class,
    // 'guest' => \App\Middleware\GuestMiddleware::class,
    'role' => \App\Middleware\RoleMiddleware::class,
    // Add more aliases here
  ],
];
