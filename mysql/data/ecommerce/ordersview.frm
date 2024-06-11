TYPE=VIEW
query=select `ecommerce`.`orders`.`orders_id` AS `orders_id`,`ecommerce`.`orders`.`orders_usersid` AS `orders_usersid`,`ecommerce`.`orders`.`orders_addressid` AS `orders_addressid`,`ecommerce`.`orders`.`orders_price` AS `orders_price`,`ecommerce`.`orders`.`orders_pricedelivery` AS `orders_pricedelivery`,`ecommerce`.`orders`.`orders_type` AS `orders_type`,`ecommerce`.`orders`.`orders_coupon` AS `orders_coupon`,`ecommerce`.`orders`.`orders_datetime` AS `orders_datetime`,`ecommerce`.`address`.`address_id` AS `address_id`,`ecommerce`.`address`.`address_userid` AS `address_userid`,`ecommerce`.`address`.`address_city` AS `address_city`,`ecommerce`.`address`.`address_street` AS `address_street`,`ecommerce`.`address`.`address_long` AS `address_long`,`ecommerce`.`address`.`address_lat` AS `address_lat` from (`ecommerce`.`orders` left join `ecommerce`.`address` on(`ecommerce`.`address`.`address_id` = `ecommerce`.`orders`.`orders_addressid`))
md5=526f0cf9a2315a4313bf32c7aabc8ee1
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001717372241203016
create-version=2
source=SELECT orders.* , address.* FROM orders \nLEFT JOIN address ON address.address_id = orders.orders_addressid
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `ecommerce`.`orders`.`orders_id` AS `orders_id`,`ecommerce`.`orders`.`orders_usersid` AS `orders_usersid`,`ecommerce`.`orders`.`orders_addressid` AS `orders_addressid`,`ecommerce`.`orders`.`orders_price` AS `orders_price`,`ecommerce`.`orders`.`orders_pricedelivery` AS `orders_pricedelivery`,`ecommerce`.`orders`.`orders_type` AS `orders_type`,`ecommerce`.`orders`.`orders_coupon` AS `orders_coupon`,`ecommerce`.`orders`.`orders_datetime` AS `orders_datetime`,`ecommerce`.`address`.`address_id` AS `address_id`,`ecommerce`.`address`.`address_userid` AS `address_userid`,`ecommerce`.`address`.`address_city` AS `address_city`,`ecommerce`.`address`.`address_street` AS `address_street`,`ecommerce`.`address`.`address_long` AS `address_long`,`ecommerce`.`address`.`address_lat` AS `address_lat` from (`ecommerce`.`orders` left join `ecommerce`.`address` on(`ecommerce`.`address`.`address_id` = `ecommerce`.`orders`.`orders_addressid`))
mariadb-version=100432
