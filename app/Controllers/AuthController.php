<?php

namespace App\Controllers;

use Core\Controller;
use function Core\Util\render;
use function Core\Util\redirect;

use App\Models\Admin;
use App\Models\Employee;

class AuthController extends Controller {

  public function login_form() {
    render('auth.login');
  }

  public function login() {

    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$username || !$password) {
      render('auth.login_error', ['message' => 'Missing username or password.']);
      return;
    }

    $admin = (new Admin())->match($username, $password);
    if ($admin) {
      $_SESSION['user_id'] = $admin['id'];
      $_SESSION['role'] = 'admin';
      return redirect('/admin');
    }

    $employee = (new Employee())->find_by_email($username);
    if ($employee) {
      $_SESSION['user_id'] = $employee['id'];
      $_SESSION['role'] = 'employee';
      return redirect('/employee');
    }

    render('auth.login_error', ['message' => 'Invalid username or password.']);
  }

  public function logout() {
    session_destroy();
    redirect('/login');
  }
}
