<?php

namespace App\Models;

use Core\Model;

class ProjectPaymentModel extends Model {
  public function __construct() {
    parent::__construct('sc_project_payment_models', ['project_id', 'model', 'allow_self_pay', 'allow_time_investment']);
  }
}
