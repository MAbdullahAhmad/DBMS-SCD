<?php

namespace App\Models;

use Core\Model;

class Employee extends Model {
  public function __construct() {
    parent::__construct('sc_employees', ['email', 'cattr_user_id', 'password_hash']);
  }

  public function find_by_email($email) {
    return $this->db->fetch(
      "SELECT * FROM {$this->table} WHERE email = ?",
      [$email]
    );
  }

  public function match($email, $password) {
    $hash = md5($password);
    return $this->db->fetch(
      "SELECT * FROM {$this->table} WHERE email = ? AND password_hash = ?",
      [$email, $hash]
    );
  }
}
