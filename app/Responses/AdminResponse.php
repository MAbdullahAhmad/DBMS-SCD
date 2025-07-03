<?php

namespace App\Responses;

use App\Util\Auth;
use function Core\Util\render;
use function Core\Util\url;

class AdminResponse {
  public static function view($view, $data = []) {
    $merged = array_merge([
      'is_logged_in' => Auth::check(),
      'auth_user'    => Auth::user(),
      'auth_role'    => Auth::role(),
      'home_label'   => 'Dashboard',
      'home_url'     => url('/admin'),
      'nav' => [
        ['route' => 'admin.dashboard',     'label' => 'Dashboard', 'icon' => 'dashboard'],
        ['route' => 'admin.projects',      'label' => 'Projects & Tasks', 'icon' => 'task'],
        ['route' => 'admin.stakes.index',  'label' => 'Payment Model',    'icon' => 'payments'],
        ['route' => 'admin.rates.index',   'label' => 'Rates',            'icon' => 'monetization_on'],
        ['route' => 'admin.salaries.index','label' => 'Salary Slips',     'icon' => 'receipt_long'],
        ['route' => 'admin.meta.index',    'label' => 'Meta',             'icon' => 'analytics'],
        ['route' => 'admin.timeline.index',      'label' => 'Timeline',         'icon' => 'timeline'],
      ],
    ], $data);

    return render($view, $merged);
  }
}
