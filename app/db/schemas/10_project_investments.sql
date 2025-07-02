CREATE TABLE IF NOT EXISTS sc_project_investments (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_id INT NOT NULL, -- FK to projects(id)
  employee_id INT NOT NULL, -- FK to sc_employees(id)
  type ENUM('money', 'time') NOT NULL,
  amount DECIMAL(12,2) NOT NULL, -- money (PKR/USD) or time (hours)
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
