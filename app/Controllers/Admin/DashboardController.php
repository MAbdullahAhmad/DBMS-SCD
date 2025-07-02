<?php

namespace App\Controllers\Admin;

use Core\Controller;
use App\Responses\AdminResponse;
use function Core\Util\render;

class DashboardController extends Controller {

  public function index() {

    // Render View with 'message' variable
    AdminResponse::view('admin.dashboard', [
      'message' => "Hello and welcome to the homepage!"
    ]);
    
  }

}