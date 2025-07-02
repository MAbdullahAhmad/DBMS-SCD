<?php

namespace App\Models;

use Core\Model;

class ProjectPayout extends Model {
  public function __construct() {
    parent::__construct('sc_project_payouts', ['project_id', 'employee_id', 'paid_amount', 'payout_type', 'paid_on']);
  }
}
