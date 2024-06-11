TYPE=VIEW
query=select sum(`ecommerce`.`items`.`items_price` - `ecommerce`.`items`.`items_price` * `ecommerce`.`items`.`items_discount` / 100) AS `itemspricediscount`,count(`ecommerce`.`cart`.`cart_itemsid`) AS `countitems`,`ecommerce`.`cart`.`cart_id` AS `cart_id`,`ecommerce`.`cart`.`cart_usersid` AS `cart_usersid`,`ecommerce`.`cart`.`cart_itemsid` AS `cart_itemsid`,`ecommerce`.`cart`.`cart_orders` AS `cart_orders`,`ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat` from (`ecommerce`.`cart` join `ecommerce`.`items` on(`ecommerce`.`items`.`items_id` = `ecommerce`.`cart`.`cart_itemsid`)) where `ecommerce`.`cart`.`cart_orders` = 0 group by `ecommerce`.`cart`.`cart_itemsid`,`ecommerce`.`cart`.`cart_usersid`,`ecommerce`.`cart`.`cart_orders`
md5=bdee8319216c9dabe097132639d9f23b
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001717372207824899
create-version=2
source=SELECT SUM(items.items_price - items.items_price * items_discount / 100) as itemspricediscount  , COUNT(cart.cart_itemsid) as countitems , cart.* , items.* FROM cart \nINNER JOIN items ON items.items_id = cart.cart_itemsid\nWHERE cart_orders = 0 \nGROUP BY cart.cart_itemsid , cart.cart_usersid , cart.cart_orders
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select sum(`ecommerce`.`items`.`items_price` - `ecommerce`.`items`.`items_price` * `ecommerce`.`items`.`items_discount` / 100) AS `itemspricediscount`,count(`ecommerce`.`cart`.`cart_itemsid`) AS `countitems`,`ecommerce`.`cart`.`cart_id` AS `cart_id`,`ecommerce`.`cart`.`cart_usersid` AS `cart_usersid`,`ecommerce`.`cart`.`cart_itemsid` AS `cart_itemsid`,`ecommerce`.`cart`.`cart_orders` AS `cart_orders`,`ecommerce`.`items`.`items_id` AS `items_id`,`ecommerce`.`items`.`items_name` AS `items_name`,`ecommerce`.`items`.`items_name_ar` AS `items_name_ar`,`ecommerce`.`items`.`items_desc` AS `items_desc`,`ecommerce`.`items`.`items_desc_ar` AS `items_desc_ar`,`ecommerce`.`items`.`items_image` AS `items_image`,`ecommerce`.`items`.`items_count` AS `items_count`,`ecommerce`.`items`.`items_active` AS `items_active`,`ecommerce`.`items`.`items_price` AS `items_price`,`ecommerce`.`items`.`items_discount` AS `items_discount`,`ecommerce`.`items`.`items_date` AS `items_date`,`ecommerce`.`items`.`items_cat` AS `items_cat` from (`ecommerce`.`cart` join `ecommerce`.`items` on(`ecommerce`.`items`.`items_id` = `ecommerce`.`cart`.`cart_itemsid`)) where `ecommerce`.`cart`.`cart_orders` = 0 group by `ecommerce`.`cart`.`cart_itemsid`,`ecommerce`.`cart`.`cart_usersid`,`ecommerce`.`cart`.`cart_orders`
mariadb-version=100432
