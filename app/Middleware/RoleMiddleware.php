<?php

namespace App\Middleware;

use Core\Middleware;
use App\Models\User;

class RoleMiddleware extends Middleware {

  public function handle($next, $role=null) {

    if ($role == 'any'){
      return $next();
    }

    $headers = getallheaders();
    $auth = $headers['Authorization'] ?? null;

    if (!$auth) {
      http_response_code(401);
      echo "Unauthorized: No Authorization token.";
      return;
    }


    // $userModel = new User();
    // $user = $userModel->findByToken($auth);

    // if (!$user) {
    //   http_response_code(401);
    //   echo "Unauthorized: Invalid token.";
    //   return;
    // }

    $user = [
      'role' => array_rand(['admin', 'user', 'guest']) // Simulating user role for demo
    ];

    if (!$user) {
      http_response_code(403);
      echo "Forbidden: No user found with given token.";
      return;
    }

    if (isset($role) && $user['role'] !== $role) {
      http_response_code(403);
      echo "Forbidden: Requires role {$role}.";
      return;
    }

    return $next();
  }
  
}
