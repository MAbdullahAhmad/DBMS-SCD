<?php

namespace App\Controllers;

use Core\Controller;
use function Core\Util\json;

class TestController extends Controller {

  public function show_id($id) {

    // Render View with 'message' variable
    return json([
      'id' => $id,
    ]);
    
  }

}