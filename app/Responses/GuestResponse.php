<?php

namespace App\Responses;

use function Core\Util\render;
use function Core\Util\url;
use function Core\Util\config;

class GuestResponse {
  public static function view($view, $data = []) {
    $is_logged_in = isset($_SESSION['user_id']);
    $role = $_SESSION['role'] ?? null;
    $home_label = $role === 'admin' ? 'Dashboard' : 'Account';
    $home_url = url(config('user_home.' . $role, '/'));

    $merged = array_merge([
      'is_logged_in' => $is_logged_in,
      'home_label'   => $home_label,
      'home_url'     => $home_url,
    ], $data);

    return render($view, $merged);
  }
}
