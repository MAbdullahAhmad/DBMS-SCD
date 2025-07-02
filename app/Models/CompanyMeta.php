<?php

namespace App\Models;

use Core\Model;

class CompanyMeta extends Model {
  public function __construct() {
    parent::__construct('sc_company_meta', ['key', 'value']);
  }
}
