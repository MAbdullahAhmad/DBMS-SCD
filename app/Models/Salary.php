<?php

namespace App\Models;

use Core\Model;

class Salary extends Model {
  public function __construct() {
    parent::__construct('sc_salaries', [
      'employee_id', 'month', 'year',
      'office_hours', 'wfh_hours',
      'office_hour_rate', 'wfh_hour_rate',
      'total_amount', 'is_finalized'
    ]);
  }
}
