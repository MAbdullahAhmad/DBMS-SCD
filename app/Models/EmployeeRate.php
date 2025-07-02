<?php

namespace App\Models;

use Core\Model;

class EmployeeRate extends Model {
  public function __construct() {
    parent::__construct('sc_employee_rates', ['employee_id', 'office_hour_rate', 'wfh_hour_rate', 'effective_from']);
  }
}
