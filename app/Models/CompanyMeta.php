<?php

namespace App\Models;

use Core\Model;

class CompanyMeta extends Model {
  public function __construct() {
    parent::__construct('sc_company_meta', ['key', 'value']);
  }

  public function getValue($key) {
    $row = $this->db->fetch("SELECT value FROM {$this->table} WHERE `key` = ?", [$key]);
    return $row['value'] ?? null;
  }

  public function getOfficeHoursRange($year, $month) {
    $custom_key = "office_hours_{$year}_{$month}";
    return $this->getValue($custom_key) ?? $this->getValue('office_hours_default') ?? '18:00:00-23:59:59';
  }

  public function rawInsert($key, $value) {
    return $this->db->query("
      INSERT INTO {$this->table} (`key`, `value`) VALUES (:key, :value)
    ", ['key' => $key, 'value' => $value]);
  }
  
}
