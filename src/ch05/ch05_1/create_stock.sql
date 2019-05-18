-- 在庫テーブル
CREATE TABLE stock (
    stock_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, -- 在庫ID
    stock_name VARCHAR(255) NOT NULL UNIQUE,              -- 在庫名
    quantity INT(11) NOT NULL ,                           -- 在庫数
    price INT(11) NOT NULL,                               -- 金額
    status CHAR(1) NOT NULL,                              -- 在庫状態
    create_date DATETIME,                                 -- 作成日
    update_date DATETIME                                  -- 更新日
);