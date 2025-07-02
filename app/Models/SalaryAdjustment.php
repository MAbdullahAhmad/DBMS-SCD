<?php

namespace App\Models;

use Core\Model;

class SalaryAdjustment extends Model {
  public function __construct() {
    parent::__construct('sc_salary_adjustments', ['salary_id', 'amount', 'category', 'note', 'adjusted_on']);
  }
}
