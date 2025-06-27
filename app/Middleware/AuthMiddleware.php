<?php

namespace App\Middleware;

use Core\Middleware;

class AuthMiddleware extends Middleware {
    public function handle($next, ...$kwargs) {
        $headers = getallheaders();
        if (empty($headers['Authorization'])) {
            http_response_code(401);
            echo "Unauthorized: Authorization header missing.";
            return;
        }

        return $next();
    }
}
