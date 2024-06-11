TYPE=VIEW
query=select `ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat`,`ecommerce`.`categories`.`categories_id` AS `categories_id`,`ecommerce`.`categories`.`categories_name` AS `categories_name`,`ecommerce`.`categories`.`categories_name_ar` AS `categories_name_ar`,`ecommerce`.`categories`.`categories_image` AS `categories_image`,`ecommerce`.`categories`.`categories_datetime` AS `categories_datetime` from (`ecommerce`.`items` join `ecommerce`.`categories` on(`ecommerce`.`items`.`items_cat` = `ecommerce`.`categories`.`categories_id`))
md5=d2c322bd0732e1cf4c2222e8a408d086
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001717290884517827
create-version=2
source=SELECT items.* , categories.* FROM items \nINNER JOIN  categories on  items.items_cat = categories.categories_id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat`,`ecommerce`.`categories`.`categories_id` AS `categories_id`,`ecommerce`.`categories`.`categories_name` AS `categories_name`,`ecommerce`.`categories`.`categories_name_ar` AS `categories_name_ar`,`ecommerce`.`categories`.`categories_image` AS `categories_image`,`ecommerce`.`categories`.`categories_datetime` AS `categories_datetime` from (`ecommerce`.`items` join `ecommerce`.`categories` on(`ecommerce`.`items`.`items_cat` = `ecommerce`.`categories`.`categories_id`))
mariadb-version=100432
