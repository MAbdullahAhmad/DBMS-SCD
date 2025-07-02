<?php

namespace App\Util;

use App\Models\Admin;
use App\Models\Employee;

class Auth
{
  protected static $user;

  public static function user()
  {
    if (self::$user) return self::$user;

    $userId = $_SESSION['user_id'] ?? null;
    $role = $_SESSION['role'] ?? null;

    if (!$userId || !$role) return null;

    if ($role === 'admin') {
      self::$user = (new Admin())->find($userId);
    } elseif ($role === 'employee') {
      self::$user = (new Employee())->find($userId);
    }

    return self::$user;
  }

  public static function role()
  {
    return $_SESSION['role'] ?? null;
  }

  public static function check()
  {
    return isset($_SESSION['user_id'], $_SESSION['role']);
  }
}
