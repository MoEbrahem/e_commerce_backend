<?php

include "./connect.php";

$orderid = filterRequest("orderid");
$userid = filterRequest("userid");
$type =filterRequest("ordertype");

if($type == "0"){
  $data = array(
  "orders_status"=> 2
);
}else{
  $data = array(
    "orders_status"=> 4
  );
}
updateData("orders",$data,"orders_id = $orderid AND orders_status = 1");

SendNotify("success","The Order Has been Recieved By Delivery",$userid,"users$userid","none","refreshorderpending");
if($type == "0"){
sendGCM("warning","there is an order awaiting Approval","delivery","none","none");
}