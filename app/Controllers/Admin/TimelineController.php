<?php

namespace App\Controllers\Admin;

use App\Responses\AdminResponse;
use Core\DB;
use function Core\Util\route;

class TimelineController {

  public function index() {
    $db = DB::getInstance();

    $month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
    $year  = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');

    $start = "{$year}-{$month}-01";
    $end   = date("Y-m-t", strtotime($start));

    // Employees with total hours
    $employee_stats = $db->fetchAll("
      SELECT u.id, u.full_name, u.email,
        ROUND(SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at))/3600, 2) AS total_hours
      FROM users u
      JOIN time_intervals ti ON ti.user_id = u.id
      WHERE ti.start_at BETWEEN ? AND ?
      GROUP BY u.id
      ORDER BY total_hours DESC
    ", [$start, $end]);

    // Projects with total hours
    $project_stats = $db->fetchAll("
      SELECT p.id, p.name,
        ROUND(SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at))/3600, 2) AS total_hours
      FROM projects p
      JOIN tasks t ON t.project_id = p.id
      JOIN time_intervals ti ON ti.task_id = t.id
      WHERE ti.start_at BETWEEN ? AND ?
      GROUP BY p.id
      ORDER BY total_hours DESC
    ", [$start, $end]);

    // Daily timeline (hours per day)
    $timeline_data = $db->fetchAll("
      SELECT DATE(ti.start_at) as day,
        ROUND(SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at))/3600, 2) AS hours
      FROM time_intervals ti
      WHERE ti.start_at BETWEEN ? AND ?
      GROUP BY day
      ORDER BY day ASC
    ", [$start, $end]);

    // Task distribution
    $task_data = $db->fetchAll("
      SELECT p.name AS project, COUNT(t.id) AS task_count
      FROM projects p
      JOIN tasks t ON t.project_id = p.id
      WHERE t.created_at BETWEEN ? AND ?
      GROUP BY p.id
    ", [$start, $end]);

    // Salary data
    $salary_data = $db->fetchAll("
      SELECT s.*, u.full_name
      FROM sc_salaries s
      JOIN sc_employees e ON e.id = s.employee_id
      JOIN users u ON u.id = e.cattr_user_id
      WHERE s.month = ? AND s.year = ?
    ", [(int)$month, (int)$year]);

    return AdminResponse::view('admin.timeline', [
      'year'          => $year,
      'month'         => $month,
      'employee_stats'=> $employee_stats,
      'project_stats' => $project_stats,
      'timeline_data' => $timeline_data,
      'task_data'     => $task_data,
      'salary_data'   => $salary_data,
      'breadcrumbs'   => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'Company Timeline', 'url' => '', 'active' => true],
      ]
    ]);
  }
}
