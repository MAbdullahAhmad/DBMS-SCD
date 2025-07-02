<?php

namespace App\Models;

use Core\Model;

class Employee extends Model {
  public function __construct() {
    parent::__construct('sc_employees', ['email', 'cattr_user_id']);
  }

  public function find_by_email($email) {
    return $this->db->fetch(
      "SELECT * FROM {$this->table} WHERE email = ?",
      [$email]
    );
  }
}
