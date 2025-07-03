<?php

namespace App\Controllers\Admin;

use App\Responses\AdminResponse;
use Core\DB;
use function Core\Util\route;
use function Core\Util\json;

class RateController {

  public function index() {
    $db = DB::getInstance();

    $employees = $db->fetchAll("
      SELECT e.id AS employee_id, u.full_name, u.email
      FROM sc_employees e
      JOIN users u ON u.id = e.cattr_user_id
      ORDER BY u.full_name
    ");

    foreach ($employees as &$emp) {
      $emp['rates'] = $db->fetchAll("
        SELECT * FROM sc_employee_rates
        WHERE employee_id = ?
        ORDER BY effective_from DESC
      ", [$emp['employee_id']]);
    }

    return AdminResponse::view('admin.rates', [
      'employees'    => $employees,
      'form_action'  => route('admin.rates.save'),
      'breadcrumbs'  => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'Employee Rates', 'url' => '', 'active' => true],
      ],
    ]);
  }

  public function save() {
    $db = DB::getInstance();

    $employee_id = $_POST['employee_id'] ?? null;
    $office_rate = $_POST['office_hour_rate'] ?? null;
    $wfh_rate = $_POST['wfh_hour_rate'] ?? null;
    $effective_from = $_POST['effective_from'] ?? null;

    if (!$employee_id || !$office_rate || !$wfh_rate || !$effective_from) {
      json(['success' => false, 'message' => 'Missing required fields']);
    }

    $db->insert('sc_employee_rates', [
      'employee_id' => $employee_id,
      'office_hour_rate' => $office_rate,
      'wfh_hour_rate' => $wfh_rate,
      'effective_from' => $effective_from,
      'created_at' => date('Y-m-d H:i:s'),
    ]);

    json(['success' => true, 'message' => 'Rate added successfully']);
  }
}
