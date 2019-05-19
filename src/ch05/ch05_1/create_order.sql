CREATE TABLE `order` (
    order_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY comment '発注ID',
    stock_id INT(11) NOT NULL comment '在庫ID',
    quantity INT(11) NOT NULL comment '個数',
    price INT(11) NOT NULL comment '金額',
    status CHAR(1) NOT NULL comment '在庫状態',
    create_date DATETIME comment '作成日',
    update_date DATETIME comment '更新日',
    FOREIGN KEY(stock_id) REFERENCES stock (stock_id)
)comment '発注テーブル';