<?php

namespace App\Controllers\Employee;

use App\Responses\EmployeeResponse;
use App\Util\Auth;
use Core\DB;
use function Core\Util\route;

class TimelineController {

  public function index() {
    $db   = DB::getInstance();
    $user = Auth::user();
    $user_id = $user['cattr_user_id'];

    $month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
    $year  = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');

    $start = "{$year}-{$month}-01";
    $end   = date("Y-m-t", strtotime($start));

    // Total hours this month (self)
    $daily_hours = $db->fetchAll("
      SELECT DATE(start_at) AS day,
        ROUND(SUM(TIMESTAMPDIFF(SECOND, start_at, end_at))/3600, 2) AS hours
      FROM time_intervals
      WHERE user_id = ? AND start_at BETWEEN ? AND ?
      GROUP BY day
      ORDER BY day ASC
    ", [$user_id, $start, $end]);

    // Project-wise stats
    $project_stats = $db->fetchAll("
      SELECT p.name,
        ROUND(SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at))/3600, 2) AS total_hours
      FROM time_intervals ti
      JOIN tasks t ON t.id = ti.task_id
      JOIN projects p ON p.id = t.project_id
      WHERE ti.user_id = ? AND ti.start_at BETWEEN ? AND ?
      GROUP BY p.id
      ORDER BY total_hours DESC
    ", [$user_id, $start, $end]);

    $task_data = $db->fetchAll("
      SELECT p.name AS project, COUNT(t.id) AS task_count
      FROM time_intervals ti
      JOIN tasks t ON t.id = ti.task_id
      JOIN projects p ON p.id = t.project_id
      WHERE ti.user_id = ? AND ti.start_at BETWEEN ? AND ?
      GROUP BY p.id
    ", [$user_id, $start, $end]);

    // Salary slip (if any)
    $employee = $db->fetch("SELECT id FROM sc_employees WHERE cattr_user_id = ?", [$user_id]);
    $salary_data = [];
    if ($employee) {
      $salary_data = $db->fetchAll("
        SELECT * FROM sc_salaries
        WHERE employee_id = ? AND month = ? AND year = ?
      ", [$employee['id'], $month, $year]);
    }

    return EmployeeResponse::view('employee.timeline', [
      'year'          => $year,
      'month'         => $month,
      'timeline_data' => $daily_hours,
      'project_stats' => $project_stats,
      'task_data'     => $task_data,
      'salary_data'   => $salary_data,
      'breadcrumbs'   => [
        ['label' => 'Dashboard', 'url' => route('employee.dashboard'), 'active' => false],
        ['label' => 'Timeline', 'url' => '', 'active' => true],
      ]
    ]);
  }
}
