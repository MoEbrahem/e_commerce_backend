<?php

include "./connect.php";

$id = filterRequest("orderid");

$rating = filterRequest("rating");

$message = filterRequest("message");


$data = array(
    "orders_noterating" =>  $comment,
    "orders_rating" =>  $rating
);

updateData("orders", $data, "orders_id = $id ");