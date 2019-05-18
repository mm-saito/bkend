CREATE TABLE user_tbl (
  user_id int NOT NULL AUTO_INCREMENT,
  pass varchar(255),
  name varchar(20), 
  mail varchar(128) UNIQUE,
  PRIMARY KEY (user_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;

