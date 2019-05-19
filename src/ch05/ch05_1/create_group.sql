CREATE TABLE `groups` (
    group_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY comment 'グループID',
    group_name VARCHAR(100) NOT NULL comment 'グループ名',
    create_date DATETIME comment '作成日',
    update_date DATETIME comment '修正日'
)comment 'グループ（権限）テーブル';