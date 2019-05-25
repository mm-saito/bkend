CREATE TABLE `users` (
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY comment 'ユーザID',
    user_name VARCHAR(255) NOT NULL comment 'ユーザ名',
    password VARCHAR(255) NOT NULL comment 'パスワード',
    group_id INT(11) NOT NULL comment 'グループID(権限)',
    create_date DATETIME comment '作成日',
    update_date DATETIME comment '更新日',
    FOREIGN KEY(group_id) REFERENCES groups (group_id)
)comment 'ユーザテーブル';