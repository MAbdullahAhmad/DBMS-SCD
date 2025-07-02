CREATE TABLE IF NOT EXISTS sc_project_payouts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_id INT NOT NULL,
  employee_id INT NOT NULL,
  paid_amount DECIMAL(12,2) NOT NULL,
  payout_type ENUM('manual', 'auto') DEFAULT 'auto',
  paid_on DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
