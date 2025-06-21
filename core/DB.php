<?php

namespace Core;

class DB {

  // ------
  // Config
  // ------

  private static $instance = null;
  private $pdo;

  // -----------
  // Constructor
  // -----------

  private function __construct() {

    // Credentials
    $host     = env('DB_HOST', '127.0.0.1');
    $name   = env('DB_NAME', '');
    $user = env('DB_USER', '');
    $pass = env('DB_PASS', '');

    $dsn = "mysql:host=$host;dbname=$name";
    $this->pdo = new PDO($dsn, $user, $pass, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new DB();
    }
    return self::$instance;
  }

  public function query($sql, $params = []) {
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt;
  }

  public function fetch($sql, $params = []) {
    return $this->query($sql, $params)->fetch(PDO::FETCH_ASSOC);
  }

  public function fetchAll($sql, $params = []) {
    return $this->query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($table, $data) {
    $keys = implode(',', array_keys($data));
    $placeholders = implode(',', array_map(fn($k) => ":$k", array_keys($data)));
    $sql = "INSERT INTO $table ($keys) VALUES ($placeholders)";
    $this->query($sql, $data);
    return $this->pdo->lastInsertId();
  }

  public function update($table, $data, $where) {
    $set = implode(',', array_map(fn($k) => "$k = :$k", array_keys($data)));
    $whereClause = implode(' AND ', array_map(fn($k) => "$k = :where_$k", array_keys($where)));
    $params = array_merge($data, array_combine(array_map(fn($k) => "where_$k", array_keys($where)), array_values($where)));
    $sql = "UPDATE $table SET $set WHERE $whereClause";
    return $this->query($sql, $params);
  }

  public function delete($table, $where) {
    $whereClause = implode(' AND ', array_map(fn($k) => "$k = :$k", array_keys($where)));
    $sql = "DELETE FROM $table WHERE $whereClause";
    return $this->query($sql, $where);
  }
}
