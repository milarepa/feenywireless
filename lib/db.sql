/* Table schema for login script feeny.users */

create table `users` (
  client_id INT(10) AUTO_INCREMENT,
  password_hash VARCHAR(50) NOT NULL,
  user_name VARCHAR(100) NOT NULL,
  PRIMARY KEY(client_id)
  );

