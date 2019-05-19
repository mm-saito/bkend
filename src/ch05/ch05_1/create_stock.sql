CREATE TABLE `stock` (
    stock_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY comment '在庫ID',
    stock_name VARCHAR(255) NOT NULL UNIQUE comment '在庫名',
    quantity INT(11) NOT NULL comment '在庫数',
    price INT(11) NOT NULL comment '金額',
    create_date DATETIME comment '作成日',
    update_date DATETIME comment '更新日'
)comment '在庫テーブル';