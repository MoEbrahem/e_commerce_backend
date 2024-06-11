<?php
include("../connect.php");

$username   = filterRequest("username");
$email      = filterRequest("email");
$password   = sha1($_POST['password']);
$phone      = filterRequest("phone");
$verifycode = rand(10000,99999);

$stmt = $con->prepare("SELECT * FROM users WHERE users_email= ? OR users_phone = ?");
$stmt->execute(array($email,$phone));
$count = $stmt->rowCount();
if($count > 0){
    PrintFailure('EMAIL OR PHONE EXISTED BEFORE');
}else{
    $data= array(
        "users_name"       => $username,
        "users_email"      => $email,
        "password"         => $password,
        "users_phone"      => $phone,
        "users_verifycode" => $verifycode,
    );


// $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";

   // mail($email,"Verify Code Ecommerce","VerifyCode is $verifycode",$headers);
    SendMail($email,"Verify Code Ecommerce ","VerifyCode is $verifycode");
    insertData('users',$data);
}