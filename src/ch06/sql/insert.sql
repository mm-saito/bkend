--権限追加
insert into groups (group_name, create_date)
value ('staff',now()),('admin',now()),('order_comp',now())

--在庫追加
insert into stock (stock_name, quantity, price, create_date)
value ('在庫イチ', 10, 100, now()),('在庫ニ', 20, 200 ,now()),('在庫サン', 30, 300,now())