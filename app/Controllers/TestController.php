<?php

namespace App\Controllers;
use Core\Controller;
use function Core\Util\render;

class HomeController extends Controller {

  public function index($id) {

    // Render View with 'message' variable
    return [
      'id' => $id,
    ];
    
  }

}