-- グループ（権限）テーブル
CREATE TABLE groups (
    group_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,   -- グループID
    group_name VARCHAR(100) NOT NULL,                       -- グループ名
    create_date DATETIME,                                   -- 作成日
    update_date DATETIME                                    -- 修正日
);