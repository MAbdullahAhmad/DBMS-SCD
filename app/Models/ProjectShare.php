<?php

namespace App\Models;

use Core\Model;

class ProjectShare extends Model {
  public function __construct() {
    parent::__construct('sc_project_shares', ['project_id', 'employee_id', 'role', 'share_percentage']);
  }
}
