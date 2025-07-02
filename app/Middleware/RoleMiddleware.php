<?php

namespace App\Middleware;

use Core\Middleware;
use App\Models\Admin;
use App\Models\Employee;

use function Core\Util\redirect;
use function Core\Util\config;

/*
 * RoleMiddleware checks if the user has the required role to access a route.
 * Roles:
 * - 'any'      → allows all
 * - 'guest'    → only for unauthenticated users (no user_id in session)
 * - 'admin'    → requires admin in sc_admins
 * - 'employee' → requires employee in sc_employees
 * Redirects to role-specific homepage on access violation.
 */
class RoleMiddleware extends Middleware {

  /**
   * Role-specific home pages.
   * @var array
   */
  protected $homepages = [];

  public function __construct(){
    $this->homepages = config('user_homepages');
  }

  public function handle($next, $role = 'any') {
    $userId = $_SESSION['user_id'] ?? null;
    $sessionRole = $_SESSION['role'] ?? null;

    // Guest only
    if ($role === 'guest') {
      if ($userId && $sessionRole && isset(self::$homepages[$sessionRole])) {
        return redirect(self::$homepages[$sessionRole]);
      }
      return $next();
    }

    // Public
    if ($role === 'any') {
      return $next();
    }

    // Required
    if ($role === 'required') {
      if (!$userId || !$sessionRole) {
        return redirect('/login');
      }
      return $next();
    }
    

    // Must be logged in for admin/employee
    if (!$userId || !$sessionRole || $sessionRole !== $role) {
      return redirect('/login');
    }

    $user = null;
    if ($role === 'admin') {
      $user = (new Admin())->find($userId);
    } elseif ($role === 'employee') {
      $user = (new Employee())->find($userId);
    }

    if (!$user) {
      http_response_code(403);
      echo "Forbidden: Access denied for role '{$role}'.";
      return;
    }

    // global $auth;
    // $auth = [
    //   'user' => $user,
    //   'role' => $sessionRole,
    // ];

    return $next();
  }
}
