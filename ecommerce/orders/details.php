<?php 

include "../connect.php" ; 

$ordersid = filterRequest("orderid")  ;

getAllData("ordersdetailsview" , "cart_orders = $ordersid "); 

