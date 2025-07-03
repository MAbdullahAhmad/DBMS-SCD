<?php

namespace App\Models;

use Core\Model;

class Admin extends Model {

  public function __construct() {
    parent::__construct('sc_admins', ['username', 'password_hash']);
  }

  /**
   * Find admin by username and plain password (hashed using MD5).
   *
   * @param string $username
   * @param string $password
   * @return array|null
   */
  public function match($username, $password) {
    $hash = md5($password);
    return $this->db->fetch(
      "SELECT * FROM {$this->table} WHERE username = ? AND password_hash = ?",
      [$username, $hash]
    );
  }
  public function existsByUsername($username, $excludeId = null) {
    $sql = "SELECT COUNT(*) as count FROM {$this->table} WHERE username = ?";
    $params = [$username];
  
    if ($excludeId !== null) {
      $sql .= " AND id != ?";
      $params[] = $excludeId;
    }
  
    $result = $this->db->fetch($sql, $params);
    return $result['count'] > 0;
  }
  
  
}
