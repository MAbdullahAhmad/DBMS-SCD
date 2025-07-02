<?php

namespace App\Models;

use Core\Model;

class ProjectInvestment extends Model {
  public function __construct() {
    parent::__construct('sc_project_investments', ['project_id', 'employee_id', 'type', 'amount']);
  }
}
