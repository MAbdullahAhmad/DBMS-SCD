<?php

namespace App\Responses;

use function Core\Util\render;
use function Core\Util\url;

class AdminResponse {
  public static function view($view, $data = []) {
    $merged = array_merge([
      'is_logged_in' => true,
      'home_label'   => 'Dashboard',
      'home_url'     => url('/admin'),
      'nav' => [
        ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => 'dashboard'],
        ['route' => 'admin.projects',  'label' => 'Projects & Tasks', 'icon' => 'task'],
        ['route' => 'admin.stakes',    'label' => 'Payment Model',    'icon' => 'payments'],
        ['route' => 'admin.rates',     'label' => 'Rates',            'icon' => 'monetization_on'],
        ['route' => 'admin.salary',    'label' => 'Salary Slips',     'icon' => 'receipt_long'],
        ['route' => 'admin.reports',   'label' => 'Reports',          'icon' => 'analytics'],
        ['route' => 'admin.timeline',  'label' => 'Timeline',         'icon' => 'timeline'],
      ],
    ], $data);

    return render($view, $merged);
  }
}
