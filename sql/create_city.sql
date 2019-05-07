CREATE TABLE city (
  prefecture_id int NOT NULL DEFAULT '0',
  name varchar(20),
  citycode char(7),
  update_datetime timestamp,
  PRIMARY KEY (citycode),
  FOREIGN KEY(prefecture_id) REFERENCES prefecture(prefecture_id)
)ENGINE=INNODB DEFAULT CHARSET=utf8;