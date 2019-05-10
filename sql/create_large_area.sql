CREATE TABLE large_area (
  name varchar(20),
  prefecture_name varchar(20),
  prefecture_id int NOT NULL DEFAULT '0',
  FOREIGN KEY(prefecture_id) REFERENCES prefecture(prefecture_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;