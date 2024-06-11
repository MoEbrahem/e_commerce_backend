<?php 

include "../connect.php"  ;

$ordersid = filterRequest("orderid") ; 

deleteData("orders" , "orders_id = $ordersid AND orders_status = 0"); 