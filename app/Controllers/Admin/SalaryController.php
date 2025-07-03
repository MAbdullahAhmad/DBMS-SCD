<?php

namespace App\Controllers\Admin;

use App\Models\CompanyMeta;
use App\Responses\AdminResponse;
use Core\DB;
use function Core\Util\route;
use function Core\Util\json;

class SalaryController {

  public function index() {
    $db = DB::getInstance();

    $month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
    $year = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');

    $salaries = $db->fetchAll("
      SELECT s.*, u.full_name, u.email 
      FROM sc_salaries s
      JOIN sc_employees e ON e.id = s.employee_id
      JOIN users u ON u.id = e.cattr_user_id
      WHERE s.month = ? AND s.year = ?
      ORDER BY s.employee_id
    ", [$month, $year]);

    $employees = $db->fetchAll("
      SELECT e.id, u.full_name, u.email 
      FROM sc_employees e
      JOIN users u ON u.id = e.cattr_user_id
      ORDER BY u.full_name
    ");

    return AdminResponse::view('admin.salaries', [
      'salaries'       => $salaries,
      'employees'      => $employees,
      'selected_month' => $month,
      'selected_year'  => $year,
      'generate_url'   => route('admin.salaries.generate'),
      'slip_url'       => route('admin.salaries.slip'),
      'breadcrumbs'    => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'Salary Management', 'url' => '', 'active' => true],
      ],
    ]);
  }

  public function generate() {
    $db = DB::getInstance();

    $employee_ids = $_POST['employee_ids'] ?? [];
    $start_date   = $_POST['start_date'] ?? null;
    $end_date     = $_POST['end_date'] ?? null;

    if (empty($employee_ids) || !$start_date || !$end_date) {
      json(['success' => false, 'message' => 'Missing fields']);
    }

    $month = (int)date('n', strtotime($start_date));
    $year  = (int)date('Y', strtotime($start_date));

    $meta  = new CompanyMeta();
    $range = $meta->getOfficeHoursRange($year, $month);
    [$start_office, $end_office] = explode('-', $range);

    foreach ($employee_ids as $eid) {
      $employee = $db->fetch("SELECT * FROM sc_employees WHERE id = ?", [$eid]);
      if (!$employee) continue;

      $uid = $employee['cattr_user_id'];

      $intervals = $db->fetchAll("
        SELECT start_at, end_at 
        FROM time_intervals 
        WHERE user_id = ? AND start_at >= ? AND end_at <= ?
      ", [$uid, $start_date, $end_date]);

      $office_sec = 0;
      $wfh_sec    = 0;

      foreach ($intervals as $ti) {
        $start = new \DateTime($ti['start_at']);
        $end   = new \DateTime($ti['end_at']);
        $duration = $end->getTimestamp() - $start->getTimestamp();
        $time     = $start->format('H:i:s');

        $is_office = (
          ($end_office === '00:00:00' && $time >= $start_office) ||
          ($time >= $start_office && $time <= $end_office)
        );

        if ($is_office) $office_sec += $duration;
        else $wfh_sec += $duration;
      }

      $office_hours = round($office_sec / 3600, 2);
      $wfh_hours    = round($wfh_sec / 3600, 2);

      $rate_row = $db->fetch("
        SELECT * FROM sc_employee_rates 
        WHERE employee_id = ? AND effective_from <= ? 
        ORDER BY effective_from DESC LIMIT 1
      ", [$eid, $start_date]);

      if (!$rate_row) continue;

      $office_rate = $rate_row['office_hour_rate'];
      $wfh_rate    = $rate_row['wfh_hour_rate'];
      $total       = ($office_rate * $office_hours) + ($wfh_rate * $wfh_hours);

      $exists = $db->fetch("SELECT id FROM sc_salaries WHERE employee_id = ? AND month = ? AND year = ?", [$eid, $month, $year]);
      if ($exists) continue;

      $db->insert('sc_salaries', [
        'employee_id'      => $eid,
        'month'            => $month,
        'year'             => $year,
        'office_hours'     => $office_hours,
        'wfh_hours'        => $wfh_hours,
        'office_hour_rate' => $office_rate,
        'wfh_hour_rate'    => $wfh_rate,
        'total_amount'     => $total,
        'created_at'       => date('Y-m-d H:i:s'),
      ]);
    }

    json(['success' => true, 'message' => "Salaries generated (office hours: $range)"]);
  }

  public function slip() {
    $db = DB::getInstance();
    $id = $_GET['id'] ?? null;

    $salary = $db->fetch("
      SELECT s.*, u.full_name, u.email 
      FROM sc_salaries s
      JOIN sc_employees e ON e.id = s.employee_id
      JOIN users u ON u.id = e.cattr_user_id
      WHERE s.id = ?
    ", [$id]);

    if (!$salary) {
      return AdminResponse::view('admin.salary_slip', ['not_found' => true]);
    }

    $adjustments = $db->fetchAll("SELECT * FROM sc_salary_adjustments WHERE salary_id = ?", [$id]);

    return AdminResponse::view('admin.salary_slip', [
      'salary'      => $salary,
      'adjustments' => $adjustments,
      'add_url'     => route('admin.salaries.add_adjustment'),
      'breadcrumbs' => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'Salary Slip', 'url' => '', 'active' => true],
      ],
    ]);
  }

  public function add_adjustment() {
    $db = DB::getInstance();

    $salary_id   = $_POST['salary_id'] ?? null;
    $amount      = $_POST['amount'] ?? null;
    $category    = $_POST['category'] ?? null;
    $note        = $_POST['note'] ?? '';
    $adjusted_on = $_POST['adjusted_on'] ?? date('Y-m-d');

    if (!$salary_id || !$amount || !$category) {
      json(['success' => false, 'message' => 'Missing required fields']);
    }

    $db->insert('sc_salary_adjustments', [
      'salary_id'   => $salary_id,
      'amount'      => $amount,
      'category'    => $category,
      'note'        => $note,
      'adjusted_on' => $adjusted_on,
      'created_at'  => date('Y-m-d H:i:s'),
    ]);

    json(['success' => true, 'message' => 'Adjustment added']);
  }
}
