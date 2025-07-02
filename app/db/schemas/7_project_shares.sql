CREATE TABLE IF NOT EXISTS sc_project_shares (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_id INT NOT NULL,  -- FK to projects(id) in Cattr
  employee_id INT NOT NULL,  -- FK to sc_employees(id)
  role ENUM('stakeholder', 'developer') NOT NULL,
  share_percentage DECIMAL(5,2) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
