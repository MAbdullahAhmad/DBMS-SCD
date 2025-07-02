<?php

namespace App\Controllers\Admin;

use Core\Controller;
use function Core\Util\render;

class DashboardController extends Controller {

  public function index() {

    // Render View with 'message' variable
    render('admin.dashboard', [
      'message' => "Hello and welcome to the homepage!"
    ]);
    
  }

}