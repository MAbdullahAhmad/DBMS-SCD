<?php

namespace Core;

class Model {
  protected $table;
  protected $fillable;
  protected $db;

  public function __construct($table, $fillable = []) {
    $this->table = $table;
    $this->fillable = $fillable;
    $this->db = DB::getInstance();
  }

  public function all() {
    return $this->db->fetchAll("SELECT * FROM {$this->table}");
  }

  public function find($id) {
    return $this->db->fetch("SELECT * FROM {$this->table} WHERE id = ?", [$id]);
  }

  public function where($column, $value) {
    return $this->db->fetch("SELECT * FROM {$this->table} WHERE {$column} = ?", [$value]);
  }

  public function insert($data) {
    return $this->db->insert($this->table, $this->filter($data));
  }

  public function update($id, $data) {
    return $this->db->update($this->table, $this->filter($data), ['id' => $id]);
  }

  public function delete($id) {
    return $this->db->delete($this->table, ['id' => $id]);
  }

  private function filter($data) {
    return array_filter($data, fn($k) => in_array($k, $this->fillable), ARRAY_FILTER_USE_KEY);
  }
}
