<?php

namespace App\Controllers\Employee;

use App\Responses\EmployeeResponse;
use App\Util\Auth;
use Core\DB;

class DashboardController {
  public function index() {
    $db   = DB::getInstance();
    $user = Auth::user();
    $cattr_user_id = $user['id'];

    // Find employee record using cattr_user_id
    $employee = $db->fetch("SELECT id FROM sc_employees WHERE cattr_user_id = ?", [$cattr_user_id]);
    $employee_id = $employee['id'] ?? null;

    $month_start = date('Y-m-01');
    $month_end   = date('Y-m-t');

    // Tracked hours this month
    $total_hours = $db->fetch("
      SELECT ROUND(SUM(TIMESTAMPDIFF(SECOND, start_at, end_at))/3600, 2) AS hours
      FROM time_intervals
      WHERE user_id = ? AND start_at BETWEEN ? AND ?
    ", [$cattr_user_id, $month_start, $month_end])['hours'] ?? 0;

    // Latest salary slip
    $salary = null;
    if ($employee_id) {
      $salary = $db->fetch("
        SELECT total_amount, office_hours, wfh_hours, month, year
        FROM sc_salaries
        WHERE employee_id = ?
        ORDER BY year DESC, month DESC
        LIMIT 1
      ", [$employee_id]);
    }

    // Daily tracked hours (last 30 days)
    $daily_hours = $db->fetchAll("
      SELECT DATE(start_at) AS day,
             ROUND(SUM(TIMESTAMPDIFF(SECOND, start_at, end_at))/3600, 2) AS hours
      FROM time_intervals
      WHERE user_id = ? AND start_at >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
      GROUP BY day
      ORDER BY day ASC
    ", [$cattr_user_id]);

    return EmployeeResponse::view('employee.dashboard', [
      'total_hours' => $total_hours,
      'salary'      => $salary,
      'daily_hours' => $daily_hours,
    ]);
  }
}
