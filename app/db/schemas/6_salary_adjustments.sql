CREATE TABLE IF NOT EXISTS sc_salary_adjustments (
  id INT PRIMARY KEY AUTO_INCREMENT,
  salary_id INT NOT NULL,  -- FK to sc_salaries(id)
  amount DECIMAL(10,2) NOT NULL,
  category ENUM('bonus', 'deduction', 'other') NOT NULL,
  note TEXT,
  adjusted_on DATE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
