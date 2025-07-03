<?php

namespace App\Controllers\Admin;

use App\Responses\AdminResponse;
use Core\DB;
use function Core\Util\route;
use function Core\Util\json;

class StakeController {

  public function index() {
    $db = DB::getInstance();

    $projects = $db->fetchAll("SELECT id, name FROM projects ORDER BY name");

    $selected_project_id = $_GET['project_id'] ?? null;
    $project_data = null;

    if ($selected_project_id) {
      $project = $db->fetch("SELECT * FROM projects WHERE id = ?", [$selected_project_id]);
      $payment_model = $db->fetch("SELECT * FROM sc_project_payment_models WHERE project_id = ?", [$selected_project_id]);
      $shares = $db->fetchAll("
        SELECT ps.*, u.full_name, u.email 
        FROM sc_project_shares ps
        JOIN sc_employees e ON ps.employee_id = e.id
        JOIN users u ON u.id = e.cattr_user_id
        WHERE ps.project_id = ?
      ", [$selected_project_id]);

      $financials = $db->fetch("SELECT * FROM sc_project_financials WHERE project_id = ?", [$selected_project_id]);

      $project_data = [
        'project'          => $project,
        'payment_model'    => $payment_model,
        'shares'           => $shares,
        'financials'       => $financials,
        'total_percentage' => array_sum(array_column($shares, 'share_percentage')),
      ];
    }

    return AdminResponse::view('admin.stakes', [
      'projects'       => $projects,
      'project_id'     => $selected_project_id,
      'project_data'   => $project_data,
      'form_action'    => route('admin.stakes.save'),
      'breadcrumbs'    => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'Project Stakes', 'url' => '', 'active' => true],
      ],
    ]);
  }

  public function save() {
    $db = DB::getInstance();
  
    $project_id = $_POST['project_id'] ?? null;
    $model = $_POST['model'] ?? null;
    $allow_self_pay = isset($_POST['allow_self_pay']) ? 1 : 0;
    $allow_time_investment = isset($_POST['allow_time_investment']) ? 1 : 0;
    $shares = $_POST['shares'] ?? [];
    $gross_income = $_POST['gross_income'] ?? null;
    $total_expense = $_POST['total_expense'] ?? 0;
  
    if (!$project_id || !$model) {
      json(['success' => false, 'message' => 'Missing required fields']);
    }
  
    $gross_income = ($gross_income === '' || $gross_income === null) ? null : (float)$gross_income;
    $total_expense = ($total_expense === '' || $total_expense === null) ? 0 : (float)$total_expense;
  
    $exists = $db->fetch("SELECT id FROM sc_project_payment_models WHERE project_id = ?", [$project_id]);
    if ($exists) {
      $db->update('sc_project_payment_models', [
        'model' => $model,
        'allow_self_pay' => $allow_self_pay,
        'allow_time_investment' => $allow_time_investment,
        'updated_at' => date('Y-m-d H:i:s'),
      ], ['project_id' => $project_id]);
    } else {
      $db->insert('sc_project_payment_models', [
        'project_id' => $project_id,
        'model' => $model,
        'allow_self_pay' => $allow_self_pay,
        'allow_time_investment' => $allow_time_investment,
        'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
  
    if ($gross_income !== null) {
      $exists = $db->fetch("SELECT id FROM sc_project_financials WHERE project_id = ?", [$project_id]);
      $data = [
        'gross_income' => $gross_income,
        'total_expense' => $total_expense,
        'updated_at' => date('Y-m-d H:i:s'),
      ];
      if ($exists) {
        $db->update('sc_project_financials', $data, ['project_id' => $project_id]);
      } else {
        $data['project_id'] = $project_id;
        $data['created_at'] = date('Y-m-d H:i:s');
        $db->insert('sc_project_financials', $data);
      }
    }
  
    $db->delete('sc_project_shares', ['project_id' => $project_id]);
  
    foreach ($shares as $s) {
      if (!isset($s['employee_id'], $s['role'], $s['percentage'])) continue;
      $db->insert('sc_project_shares', [
        'project_id' => $project_id,
        'employee_id' => $s['employee_id'],
        'role' => $s['role'],
        'share_percentage' => $s['percentage'],
        'created_at' => date('Y-m-d H:i:s'),
      ]);
    }
  
    json(['success' => true, 'message' => 'Stakes and payment model updated']);
  }
  
}
