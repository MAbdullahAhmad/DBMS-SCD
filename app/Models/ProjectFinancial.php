<?php

namespace App\Models;

use Core\Model;

class ProjectFinancial extends Model {
  public function __construct() {
    parent::__construct('sc_project_financials', ['project_id', 'gross_income', 'total_expense', 'closing_date', 'notes']);
  }
}
