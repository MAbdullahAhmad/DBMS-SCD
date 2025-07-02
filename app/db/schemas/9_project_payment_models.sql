CREATE TABLE IF NOT EXISTS sc_project_payment_models (
  id INT PRIMARY KEY AUTO_INCREMENT,
  project_id INT NOT NULL, -- FK to projects(id) in Cattr
  model ENUM('hourly', 'share', 'stakeholder') NOT NULL,
  allow_self_pay BOOLEAN DEFAULT FALSE,         -- stakeholders can pay themselves
  allow_time_investment BOOLEAN DEFAULT FALSE,  -- allow time-based investments
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
