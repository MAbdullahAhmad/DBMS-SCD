<?php

namespace App\Controllers\Admin;

use App\Util\Auth;
use Core\View;
use Core\DB;

use function Core\Util\json;

class ProjectController {

  public function index() {
    $db = DB::getInstance();

    $projects = $db->fetchAll("SELECT * FROM projects ORDER BY id DESC");

    return json([
      'user' => Auth::user(),
      'projects' => $projects,
    ]);
  }
}
