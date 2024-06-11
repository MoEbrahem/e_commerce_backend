TYPE=VIEW
query=select `ecommerce`.`favorite`.`favorite_id` AS `favorite_id`,`ecommerce`.`favorite`.`favorite_userid` AS `favorite_userid`,`ecommerce`.`favorite`.`favorite_itemsid` AS `favorite_itemsid`,`ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat`,`ecommerce`.`users`.`users_id` AS `users_id` from ((`ecommerce`.`favorite` join `ecommerce`.`users` on(`ecommerce`.`users`.`users_id` = `ecommerce`.`favorite`.`favorite_userid`)) join `ecommerce`.`items` on(`ecommerce`.`items`.`items_id` = `ecommerce`.`favorite`.`favorite_itemsid`))
md5=eded69918ae1b1d06e576d0bf5e0aefe
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001717370327793501
create-version=2
source=SELECT favorite.* , items.* , users.users_id FROM favorite \nINNER JOIN users ON users.users_id  = favorite.favorite_userid\nINNER JOIN items ON items.items_id  = favorite.favorite_itemsid
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `ecommerce`.`favorite`.`favorite_id` AS `favorite_id`,`ecommerce`.`favorite`.`favorite_userid` AS `favorite_userid`,`ecommerce`.`favorite`.`favorite_itemsid` AS `favorite_itemsid`,`ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat`,`ecommerce`.`users`.`users_id` AS `users_id` from ((`ecommerce`.`favorite` join `ecommerce`.`users` on(`ecommerce`.`users`.`users_id` = `ecommerce`.`favorite`.`favorite_userid`)) join `ecommerce`.`items` on(`ecommerce`.`items`.`items_id` = `ecommerce`.`favorite`.`favorite_itemsid`))
mariadb-version=100432
