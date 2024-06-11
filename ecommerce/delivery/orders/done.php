<?php

include "./connect.php";

$orderid = filterRequest("orderid");
$userid = filterRequest("userid");
$data = array(
  "orders_status"=> 4
);

updateData("orders",$data,"orders_id = $orderid AND orders_status = 3");

SendNotify("success","The Order Has been Deliverd",$userid,"users$userid","none","refreshorderpending");

sendGCM("warning","The Order Has been deliverd to a customer ","services","none","none");