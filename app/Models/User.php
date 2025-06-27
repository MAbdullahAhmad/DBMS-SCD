<?php

namespace App\Models;

use Core\Model;

class User extends Model {
  public function __construct() {
    parent::__construct('users', ['name', 'email', 'token', 'role']); // columns
  }

  public function findByToken($token) {
    return $this->where('token', $token);
  }
}
