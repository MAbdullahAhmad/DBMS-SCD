<?php

namespace App\Controllers\Employee;

use App\Responses\EmployeeResponse;
use App\Util\Auth;
use Core\DB;
use function Core\Util\route;

class SalaryController {

  public function index() {
    $db   = DB::getInstance();
    $user = Auth::user();
    $year = isset($_GET['year']) ? (int)$_GET['year'] : (int)date('Y');

    $employee_id = $user['id'] ?? null;

    if (!$employee_id) {
      return EmployeeResponse::view('employee.salary', [
        'salaries' => [], 'year' => $year,
        'breadcrumbs' => [
          ['label' => 'Dashboard', 'url' => route('employee.dashboard'), 'active' => false],
          ['label' => 'My Salary Slips', 'url' => '', 'active' => true],
        ]
      ]);
    }

    $salaries = $db->fetchAll("
      SELECT * FROM sc_salaries
      WHERE employee_id = ? AND year = ?
      ORDER BY month DESC
    ", [$employee_id, $year]);

    // $salaries = $db->fetchAll("
    //     SELECT s.*, 
    //       (SELECT SUM(amount) FROM sc_salary_adjustments WHERE salary_id = s.id AND category = 'bonus') AS bonus
    //     FROM sc_salaries s
    //     WHERE s.employee_id = ? AND s.year = ?
    //     ORDER BY s.month DESC
    //   ", [$employee_id, $year]);

    return EmployeeResponse::view('employee.salary', [
      'salaries' => $salaries, 'year' => $year,
      'breadcrumbs' => [
        ['label' => 'Dashboard', 'url' => route('employee.dashboard'), 'active' => false],
        ['label' => 'My Salary Slips', 'url' => '', 'active' => true],
      ]
    ]);
  }

  public function slip() {
    $db   = DB::getInstance();
    $user = Auth::user();
    $salary_id = $_GET['id'] ?? null;

    if (!$salary_id) {
      return EmployeeResponse::view('employee.salary_slip', ['not_found' => true]);
    }

    // $employee = $db->fetch("SELECT id FROM sc_employees WHERE cattr_user_id = ?", [$user['id']]);
    $employee_id = $user['id'] ?? null;

    $salary = $db->fetch("
      SELECT * FROM sc_salaries
      WHERE id = ? AND employee_id = ?
    ", [$salary_id, $employee_id]);

    if (!$salary) {
      return EmployeeResponse::view('employee.salary_slip', ['not_found' => true]);
    }

    $adjustments = $db->fetchAll("SELECT * FROM sc_salary_adjustments WHERE salary_id = ?", [$salary_id]);

    return EmployeeResponse::view('employee.salary_slip', [
      'salary'      => $salary,
      'adjustments' => $adjustments,
      'breadcrumbs' => [
        ['label' => 'Dashboard', 'url' => route('employee.dashboard'), 'active' => false],
        ['label' => 'My Salary Slips', 'url' => route('employee.salary'), 'active' => false],
        ['label' => 'Salary Slip', 'url' => '', 'active' => true],
      ],
    ]);
  }
}
