<?php

namespace App\Responses;

use App\Util\Auth;
use function Core\Util\render;
use function Core\Util\url;

class EmployeeResponse {
  public static function view($view, $data = []) {
    $merged = array_merge([
      'is_logged_in' => Auth::check(),
      'auth_user'    => Auth::user(),
      'auth_role'    => Auth::role(),
      'home_label'   => 'Account',
      'home_url'     => url('/employee'),
      'nav' => [
        ['route' => 'employee.dashboard',       'label' => 'Dashboard',        'icon' => 'home'],
        ['route' => 'employee.timeline',        'label' => 'Timeline',         'icon' => 'timeline'],
        ['route' => 'employee.salary',          'label' => 'My Salary',        'icon' => 'receipt'],
        ['route' => 'employee.account.index',   'label' => 'My Account',       'icon' => 'account_circle'],
      ],

    ], $data);

    return render($view, $merged);
  }
}
