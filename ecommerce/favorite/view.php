<?php


include "../connect.php";


$id = filterRequest("userid");


getAllData("myfavorite", "favorite_usersid = ?  ", array($id));