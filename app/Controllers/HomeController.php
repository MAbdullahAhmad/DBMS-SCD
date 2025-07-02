<?php

namespace App\Controllers;

use Core\Controller;
use App\Responses\GuestResponse;

use function Core\Util\render;
use function Core\Util\config;
use function Core\Util\url;

class HomeController extends Controller {

  public function index() {

    return GuestResponse::view('home.welcome', [
      'message' => 'test'
    ]);
    
  }

}