<?php

include "../connect.php";

$userid = filterRequest("userid");

$data  = getAllData("cartview", "cart_usersid = $userid", null, false);

$stmt = $con->prepare("SELECT SUM(itemspricediscount) as totalprice , count(countitems) as totalcount FROM `cartview`  
WHERE  cartview.cart_usersid =  $userid 
GROUP BY cartview.cart_usersid ");

$stmt->execute();


$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(
  array(
    "status" => "success",
    "countprice" =>  $datacountprice,
    "data" => $data,
));