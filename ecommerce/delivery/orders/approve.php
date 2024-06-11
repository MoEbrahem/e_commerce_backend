<?php

include "./connect.php";

$orderid = filterRequest("orderid");
$userid = filterRequest("userid");
$deliveryid =filterRequest("deliveryid");

$data = array(
  "orders_status"=> 3
);

updateData("orders",$data,"orders_id = $orderid AND orders_status = 2");

SendNotify("success","The Order is on the way ",$userid,"users$userid","none","refreshorderpending");

sendGCM("warning","The Order Has been Approved by delivery","services","none","none");

sendGCM("warning","The Order Has been Approved by delivery $deliveryid","services","none","none");