<?php

namespace App\Controllers;
use Core\Controller;
use function Core\Util\render;

class HomeController extends Controller {

  public function index() {

    // Render View with 'message' variable
    render('home/welcome', [
      'message' => "Hello and welcome to the homepage!"
    ]);
    
  }

}