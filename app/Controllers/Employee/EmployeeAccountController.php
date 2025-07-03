<?php

namespace App\Controllers\Employee;

use App\Models\Employee;
use App\Responses\EmployeeResponse;
use App\Util\Auth;

use function Core\Util\route;
use function Core\Util\json;

class EmployeeAccountController {
  protected $model;
  protected $employee;

  public function __construct() {
    $this->model    = new Employee();
    $this->employee = Auth::user();
  }

  public function index() {
    return EmployeeResponse::view('employee.account', [
      'employee'     => $this->employee,
      'update_url'   => route('employee.account.update_profile'),
      'password_url' => route('employee.account.update_password'),
      'breadcrumbs'  => [
        ['label' => 'Dashboard', 'url' => route('employee.dashboard'), 'active' => false],
        ['label' => 'My Account', 'url' => '', 'active' => true]
      ]
    ]);
  }

  public function update_profile() {
    $email = $_POST['email'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return json(['status' => 'error', 'message' => 'Invalid email address.']);
    }

    $existing = $this->model->find_by_email($email);
    if ($existing && $existing['id'] != $this->employee['id']) {
      return json(['status' => 'error', 'message' => 'Email already in use.']);
    }

    $this->model->update($this->employee['id'], ['email' => $email]);

    return json(['status' => 'success', 'message' => 'Profile updated.']);
  }

  public function update_password() {
    $current = $_POST['current_password'] ?? '';
    $new     = $_POST['new_password'] ?? '';
  
    if (!$current || !$new) {
      return json(['status' => 'error', 'message' => 'Both fields are required.']);
    }
  
    if ($this->employee['password_hash'] !== md5($current)) {
      return json(['status' => 'error', 'message' => 'Incorrect current password.']);
    }
  
    // Ensure correct column exists and value is not empty
    $update_data = ['password_hash' => md5($new)];
  
    if (empty($update_data)) {
      return json(['status' => 'error', 'message' => 'No data to update.']);
    }
  
    $this->model->update($this->employee['id'], $update_data);
  
    return json(['status' => 'success', 'message' => 'Password changed.']);
  }
  
}
