INSERT INTO sc_employees (email, cattr_user_id) VALUES
('abdullah.faisal@eigensol.com', 1),
('abdullah@eigensol.com', 2),
('admin@cattr.app', 3),
('admin@eigensol.com', 4),
('arslangondal@eigensol.com', 5),
('dilawar@eigensol.com', 6),
('saim@eigensol.com', 7),
('umer@eigensol.com', 8);

UPDATE sc_employees 
SET password_hash = '5f4dcc3b5aa765d61d8327deb882cf99';

UPDATE sc_employees SET cattr_user_id = 5 WHERE email = 'abdullah.faisal@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 6 WHERE email = 'abdullah@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 1 WHERE email = 'admin@cattr.app';
UPDATE sc_employees SET cattr_user_id = 2 WHERE email = 'admin@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 8 WHERE email = 'arslangondal@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 3 WHERE email = 'dilawar@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 4 WHERE email = 'saim@eigensol.com';
UPDATE sc_employees SET cattr_user_id = 7 WHERE email = 'umer@eigensol.com';
