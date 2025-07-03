<?php

namespace App\Controllers\Admin;

use App\Responses\AdminResponse;
use Core\DB;
use function Core\Util\route;

class DashboardController {

  public function index() {
    $db = DB::getInstance();

    $today = date('Y-m-d');
    $month_start = date('Y-m-01');
    $month_end = date('Y-m-t');

    // Few Summary Cards
    $employee_count = $db->fetch("SELECT COUNT(*) AS c FROM users WHERE role_id = 2 AND deleted_at IS NULL")['c'];
    $month_hours = $db->fetch("
      SELECT ROUND(SUM(TIMESTAMPDIFF(SECOND, start_at, end_at)) / 3600, 2) AS hours
      FROM time_intervals
      WHERE start_at BETWEEN ? AND ?
    ", [$month_start, $month_end])['hours'] ?? 0;

    // Chart: Tracked Hours Per Day (last 30 days)
    $daily_hours = $db->fetchAll("
      SELECT DATE(start_at) AS day, ROUND(SUM(TIMESTAMPDIFF(SECOND, start_at, end_at))/3600, 2) AS hours
      FROM time_intervals
      WHERE start_at >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
      GROUP BY day
      ORDER BY day ASC
    ");

    // Chart: Top 5 Employees This Month
    $top_employees = $db->fetchAll("
      SELECT u.full_name, ROUND(SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at)) / 3600, 2) AS hours
      FROM users u
      JOIN time_intervals ti ON ti.user_id = u.id
      WHERE ti.start_at BETWEEN ? AND ?
      GROUP BY u.id
      ORDER BY hours DESC
      LIMIT 5
    ", [$month_start, $month_end]);

    // Chart: Salaries This Month
    $salary_chart = $db->fetchAll("
      SELECT u.full_name, s.total_amount
      FROM sc_salaries s
      JOIN sc_employees e ON e.id = s.employee_id
      JOIN users u ON u.id = e.cattr_user_id
      WHERE s.month = ? AND s.year = ?
      ORDER BY s.total_amount DESC
      LIMIT 7
    ", [(int)date('n'), (int)date('Y')]);

    return AdminResponse::view('admin.dashboard', [
      'employee_count' => $employee_count,
      'month_hours'    => $month_hours,
      'daily_hours'    => $daily_hours,
      'top_employees'  => $top_employees,
      'salary_chart'   => $salary_chart,
      'breadcrumbs'    => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => true]
      ]
    ]);
  }
}
