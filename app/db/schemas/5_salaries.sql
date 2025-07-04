CREATE TABLE IF NOT EXISTS sc_salaries (
  id INT PRIMARY KEY AUTO_INCREMENT,
  employee_id INT NOT NULL,  -- FK to sc_employees(id)
  `month` TINYINT NOT NULL,
  `year` SMALLINT NOT NULL,
  office_hours DECIMAL(10,2) DEFAULT 0,
  wfh_hours DECIMAL(10,2) DEFAULT 0,
  office_hour_rate DECIMAL(10,2),
  wfh_hour_rate DECIMAL(10,2),
  total_amount DECIMAL(12,2) DEFAULT 0,
  is_finalized BOOLEAN DEFAULT FALSE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
