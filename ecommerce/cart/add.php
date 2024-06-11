<?php


include "../connect.php";


$usersid = filterRequest("userid");
$itemsid = filterRequest("itemsid");


$count  = getData("cart", "cart_itemsid = ? AND cart_usersid = ? AND cart_orders = 0" ,array($itemsid,$usersid)  , false );


$data = array(
    "cart_usersid" =>  $usersid,
    "cart_itemsid" =>  $itemsid
);

insertData("cart", $data);
 
