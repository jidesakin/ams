
CREATE TABLE users (
  user_id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  group_id INTEGER,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(100) NOT NULL,
  email VARCHAR(50),
  remember_token VARCHAR(255) NOT NULL,
  created_time DATETIME
);