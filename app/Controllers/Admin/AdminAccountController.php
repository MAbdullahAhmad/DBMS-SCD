<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Responses\AdminResponse;
use App\Util\Auth;

use function Core\Util\route;
use function Core\Util\json;

class AdminAccountController {
  protected $model;
  protected $admin;

  public function __construct() {
    $this->model = new Admin();
    $this->admin = Auth::user();
  }

  public function index() {
    return AdminResponse::view('admin.account', [
      'admin' => $this->admin,
      'update_url' => route('admin.account.update'),
      'password_url' => route('admin.account.password'),
      'breadcrumbs' => [
        ['label' => 'Admin', 'url' => route('admin.dashboard'), 'active' => false],
        ['label' => 'My Account', 'url' => '', 'active' => true]
      ]
    ]);
  }

  public function update_profile() {
    $username = $_POST['username'] ?? '';

    if ($this->model->existsByUsername($username, $this->admin['id'])) {
      return json(['status' => 'error', 'message' => 'Username already exists.']);
    }

    $this->model->update($this->admin['id'], ['username' => $username]);

    return json(['status' => 'success', 'message' => 'Profile updated.']);
  }

  public function update_password() {
    $current = $_POST['current_password'] ?? '';
    $new = $_POST['new_password'] ?? '';

    if ($this->admin['password_hash'] !== md5($current)) {
      return json(['status' => 'error', 'message' => 'Incorrect current password.']);
    }

    $this->model->update($this->admin['id'], ['password_hash' => md5($new)]);

    return json(['status' => 'success', 'message' => 'Password changed.']);
  }
}
