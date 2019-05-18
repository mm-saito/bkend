-- ユーザテーブル
CREATE TABLE users (
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, -- ユーザID
    user_name VARCHAR(255) NOT NULL,                     -- ユーザ名
    password CHAR(40) NOT NULL,                          -- パスワード
    group_id INT(11) NOT NULL,                           -- グループID(権限)
    create_date DATETIME,                                -- 作成日
    update_date DATETIME,                                -- 更新日
    FOREIGN KEY(group_id) REFERENCES groups (group_id)   -- 外部キー
);