CREATE TABLE goods (
  id int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  name varchar(100) NOT NULL COMMENT '商品名',
  catch_copy varchar(200) NOT NULL COMMENT 'キャッチコピー',
  price int(11) NOT NULL COMMENT '金額', 
  PRIMARY KEY (id)
) COMMENT='商品テーブル';