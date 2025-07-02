CREATE TABLE IF NOT EXISTS sc_project_financials (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_id INT NOT NULL,  -- FK to projects(id) in Cattr
  gross_income DECIMAL(12,2) NOT NULL,
  total_expense DECIMAL(12,2) DEFAULT 0,
  closing_date DATE,
  notes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
