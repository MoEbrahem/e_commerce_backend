<?php
include("../connect.php");

$username   = filterRequest("username");
$email      = filterRequest("email");
$password   = sha1($_POST['password']);
$phone      = filterRequest("phone");
$verifycode = rand(10000,99999);

$stmt = $con->prepare("SELECT * FROM delivery WHERE delivery_email= ? OR delivery_phone = ?");
$stmt->execute(array($email,$phone));
$count = $stmt->rowCount();
if($count > 0){
    PrintFailure('EMAIL OR PHONE EXISTED BEFORE');
}else{
    $data= array(
        "delivery_name"       => $username,
        "delivery_email"      => $email,
        "delivery_password"         => $password,
        "delivery_phone"      => $phone,
        "delivery_verifycode" => $verifycode,
    );


// $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";

   // mail($email,"Verify Code Ecommerce","VerifyCode is $verifycode",$headers);
    SendMail($email,"Verify Code Ecommerce ","VerifyCode is $verifycode");
    insertData('delivery',$data);
}