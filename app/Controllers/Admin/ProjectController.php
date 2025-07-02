<?php

namespace App\Controllers\Admin;

use App\Responses\AdminResponse;
use App\Util\Auth;
use Core\DB;

class ProjectController {

  public function index() {
    $db = DB::getInstance();
  
    $projects = $db->fetchAll("SELECT * FROM projects ORDER BY id DESC");
    $tasks = $db->fetchAll("SELECT * FROM tasks ORDER BY project_id, id");
    $employees = $db->fetchAll("
      SELECT e.*, u.full_name, u.email 
      FROM sc_employees e 
      JOIN users u ON u.id = e.cattr_user_id
    ");
  
    $now = new \DateTime();
    $now_str = $now->format('Y-m-d H:i:s');
    $current_month = $now->format('n');
    $current_year = $now->format('Y');
  
    $filter_month = isset($_GET['month']) ? (int)$_GET['month'] : $current_month;
    $filter_year  = isset($_GET['year'])  ? (int)$_GET['year']  : $current_year;
  
    $first_of_month_dt = new \DateTime("$filter_year-$filter_month-01");
    $next_month_dt = (clone $first_of_month_dt)->modify('first day of next month');
    $first_of_month = $first_of_month_dt->format('Y-m-d H:i:s');
    $next_month = $next_month_dt->format('Y-m-d H:i:s');
  
    $monday = (new \DateTime('monday this week'))->setTime(0, 0)->format('Y-m-d H:i:s');
  
    // Preload employee time
    $userTimes = $db->fetchAll("
      SELECT user_id,
        SUM(CASE WHEN start_at >= :monday AND start_at <= :now THEN TIMESTAMPDIFF(SECOND, start_at, end_at) ELSE 0 END) AS week_sec,
        SUM(CASE WHEN start_at >= :first AND start_at < :next THEN TIMESTAMPDIFF(SECOND, start_at, end_at) ELSE 0 END) AS month_sec
      FROM time_intervals
      GROUP BY user_id
    ", [
      'monday' => $monday,
      'now'    => $now_str,
      'first'  => $first_of_month,
      'next'   => $next_month,
    ]);
  
    $userTimeMap = [];
    foreach ($userTimes as $row) {
      $userTimeMap[$row['user_id']] = [
        'week' => round($row['week_sec'] / 3600, 2),
        'month' => round($row['month_sec'] / 3600, 2),
      ];
    }
  
    // Preload task-user time
    $taskUserTimes = $db->fetchAll("
      SELECT user_id, task_id,
        SUM(CASE WHEN start_at >= :monday AND start_at <= :now THEN TIMESTAMPDIFF(SECOND, start_at, end_at) ELSE 0 END) AS week_sec,
        SUM(CASE WHEN start_at >= :first AND start_at < :next THEN TIMESTAMPDIFF(SECOND, start_at, end_at) ELSE 0 END) AS month_sec
      FROM time_intervals
      GROUP BY user_id, task_id
    ", [
      'monday' => $monday,
      'now'    => $now_str,
      'first'  => $first_of_month,
      'next'   => $next_month,
    ]);
  
    $taskTimeMap = [];
    foreach ($taskUserTimes as $row) {
      $taskTimeMap[$row['user_id']][$row['task_id']] = [
        'week' => round($row['week_sec'] / 3600, 2),
        'month' => round($row['month_sec'] / 3600, 2),
      ];
    }
  
    // Add times to employees
    foreach ($employees as &$emp) {
      $uid = $emp['cattr_user_id'];
      $emp['time_week_hours'] = $userTimeMap[$uid]['week'] ?? 0;
      $emp['time_month_hours'] = $userTimeMap[$uid]['month'] ?? 0;
  
      $emp['tasks'] = $db->fetchAll("
        SELECT t.*, p.name as project_name 
        FROM tasks t 
        JOIN projects p ON p.id = t.project_id
        WHERE t.id IN (
          SELECT DISTINCT task_id FROM time_intervals WHERE user_id = ?
        )
        ORDER BY p.name, t.task_name
      ", [$uid]);
  
      foreach ($emp['tasks'] as &$task) {
        $tid = $task['id'];
        $task['time_week_hours'] = $taskTimeMap[$uid][$tid]['week'] ?? 0;
        $task['time_month_hours'] = $taskTimeMap[$uid][$tid]['month'] ?? 0;
      }
    }
  
    // project-level tracking
    $projects_with_tasks = [];
    foreach ($projects as $project) {
      $pid = $project['id'];
  
      $week_sec = $db->fetch("
        SELECT SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at)) AS total
        FROM time_intervals ti
        JOIN tasks t ON t.id = ti.task_id
        WHERE t.project_id = ? AND ti.start_at >= ? AND ti.start_at <= ?
      ", [$pid, $monday, $now_str])['total'] ?? 0;
  
      $month_sec = $db->fetch("
        SELECT SUM(TIMESTAMPDIFF(SECOND, ti.start_at, ti.end_at)) AS total
        FROM time_intervals ti
        JOIN tasks t ON t.id = ti.task_id
        WHERE t.project_id = ? AND ti.start_at >= ? AND ti.start_at < ?
      ", [$pid, $first_of_month, $next_month])['total'] ?? 0;
  
      $project['time_week_hours'] = round($week_sec / 3600, 2);
      $project['time_month_hours'] = round($month_sec / 3600, 2);
      $project['tasks'] = [];
  
      $projects_with_tasks[$pid] = $project;
    }
  
    foreach ($tasks as $task) {
      $tid = $task['id'];
  
      $week_sec = $db->fetch("
        SELECT SUM(TIMESTAMPDIFF(SECOND, start_at, end_at)) AS total 
        FROM time_intervals 
        WHERE task_id = ? AND start_at >= ? AND start_at <= ?
      ", [$tid, $monday, $now_str])['total'] ?? 0;
  
      $month_sec = $db->fetch("
        SELECT SUM(TIMESTAMPDIFF(SECOND, start_at, end_at)) AS total 
        FROM time_intervals 
        WHERE task_id = ? AND start_at >= ? AND start_at < ?
      ", [$tid, $first_of_month, $next_month])['total'] ?? 0;
  
      $task['time_week_hours'] = round($week_sec / 3600, 2);
      $task['time_month_hours'] = round($month_sec / 3600, 2);
  
      if (isset($projects_with_tasks[$task['project_id']])) {
        $projects_with_tasks[$task['project_id']]['tasks'][] = $task;
      }
    }
  
    usort($projects_with_tasks, fn($a, $b) => strcmp($a['name'], $b['name']));
  
    return AdminResponse::view('admin.projects', [
      'projects'      => $projects_with_tasks,
      'employees'     => $employees,
      'filter_month'  => $filter_month,
      'filter_year'   => $filter_year,
      'breadcrumbs'    => [
        ['label' => 'Admin', 'url' => '/admin/dashboard', 'active' => false],
        ['label' => 'Projects & Tasks', 'url' => '', 'active' => true],
      ],
    ]);
  }
  
  
}
