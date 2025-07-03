<?php

namespace App\Responses;

use App\Util\Auth;
use function Core\Util\render;
use function Core\Util\url;
use function Core\Util\config;

class GuestResponse {
  public static function view($view, $data = []) {
    $role = Auth::role();
    $home_label = $role === 'admin' ? 'Dashboard' : 'Account';
    $home_url = url(config('user_home.' . $role, '/'));

    $merged = array_merge([
      'is_logged_in' => Auth::check(),
      'auth_user'    => Auth::user(),
      'auth_role'    => $role,
      'home_label'   => $home_label,
      'home_url'     => $home_url,
    ], $data);

    return render($view, $merged);
  }
}
