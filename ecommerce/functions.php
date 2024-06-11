<?php 


define('MB',1048576);
function filterRequest($requestname){
    
    return htmlspecialchars(strip_tags($_POST[$requestname]));
    
}
function getAllData($table, $where = null, $values = null, $json=true)
{
    global $con;
    $data = array();
    if($where == null){
        $stmt = $con->prepare("SELECT  * FROM $table ");

    }else{
        $stmt = $con->prepare("SELECT  * FROM $table WHERE  $where ");

    }
    $stmt->execute($values);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if($json==true){
        if ($count > 0){
            echo json_encode(array("status" => "success", "data" => $data));
        } else {
            echo json_encode(array("status" => "failure"));
        }
        return $count;
    }else{
        if ($count > 0){
            return array("status" => "success", "data" => $data) ;
    }else{
        return array("status" => "failure");
    }
}
}

function getData($table, $where = null, $values = null, $json =true)
{
    global $con;
    $data = array();
    $stmt = $con->prepare("SELECT  * FROM $table WHERE $where ");
    $stmt->execute($values);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    $count  = $stmt->rowCount();
    if($json == true){
        if ($count > 0){
            echo json_encode(array("status" => "success", "data" => $data));
        } else {
            echo json_encode(array("status" => "failure"));
        }
    }else{
    return $count;
    }
}

function insertData($table, $data, $json = true)
{
    global $con;
    foreach ($data as $field => $v)
        $ins[] = ':' . $field;
    $ins = implode(',', $ins);
    $fields = implode(',', array_keys($data));
    $sql = "INSERT INTO $table ($fields) VALUES ($ins)";

    $stmt = $con->prepare($sql);
    foreach ($data as $f => $v) {
        $stmt->bindValue(':' . $f, $v);
    }
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($json == true) {
    if ($count > 0) {
        echo json_encode(
            array("status" => "success" ,
                  "data"   =>  $data
                ));
    } else {
        echo json_encode(array("status" => "failure"));
    }
  }
    return $count;
}


function updateData($table, $data, $where, $json = true)
{
    global $con;
    $cols = array();
    $vals = array();

    foreach ($data as $key => $val) {
        $vals[] = "$val";
        $cols[] = "`$key` =  ? ";
    }
    $sql = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";

    $stmt = $con->prepare($sql);
    $stmt->execute($vals);
    $count = $stmt->rowCount();
    if ($json == true) {
    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "failure"));
    }
    }
    return $count;
}

function deleteData($table, $where, $json = true)
{
    global $con;
    $stmt = $con->prepare("DELETE FROM $table WHERE $where");
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($json == true) {
        if ($count > 0) {
            echo json_encode(array("status" => "success"));
        } else {
            echo json_encode(array("status" => "failure"));
        }
    }
    return $count;
}

function checkAuthenticate(){
    if (isset($_SERVER['PHP_AUTH_USER'])  && isset($_SERVER['PHP_AUTH_PW'])) {

        if ($_SERVER['PHP_AUTH_USER'] != "Mohamed" ||  $_SERVER['PHP_AUTH_PW'] != "M.I472001M.I"){
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Page Not Found';
            exit;
        }
    } else {
        exit;
    }
}



function imageUpload($imageRequest){
    global $error ;
    $imagename = rand(1000,10000).$_FILES[$imageRequest]['name'];
    $imagetmp  = $_FILES[$imageRequest]['tmp_name'];
    $imagesize = $_FILES[$imageRequest]['size'] ;

    $allowExt  = array('png','jpg','gif','pdf');
    $strtoarr  = explode('.',$imagename);
    $ext       = end($strtoarr);
    $ext       = strtolower($ext);

    if(!empty($imagename) && !in_array($ext ,$allowExt))
    {
        $error[] = 'Ext';
    }
    if($imagesize > 3*MB)
    {
        $error[]= 'Size Error';
    }
  if(empty($error))
  {
      move_uploaded_file($imagetmp , '../upload/' . $imagename);
      return $imagename ;

  }else{
      return 'Fail image';
      // print_r($error);
  }
}

function delete_image($dir,$imagename){
    if(file_exists($dir . "/" . $imagename)){
        unlink($dir . "/". $imagename);
    }
}

function PrintFailure($message='none'){
    echo json_encode(array('status'=>"Failure","message"=> $message));
}
function PrintSuccess($message='none'){
    echo json_encode(array('status'=>"success","message"=> $message));
}

function result($count){
    if($count >0){
        PrintSuccess();
    }else{
        PrintFailure();
    }
}





function SendMail($to,$subject,$message){
    $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com".

        'Bcc: user@herdomain.com' . " " .
        'Reply-To: user@example.com' . " " .
        'X-Mailer: PHP/' . phpversion();
    // $header = "From: testsite <mail@testsite.com>" . "\n" . "CC: Mohamed24taa@gmail.com";
    if(mail($to,$subject,$message,$headers))
    {
    echo "Mail Send Successfully" ;
    }else{
    echo "Mail Sent Fails" ;

    }
}


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';
// require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/src/SMTP.php';
// require './PHPMailer/PHPMailerAutoload.php';

// // Create an instance; passing `true` enables exceptions
// function SendMail($to,$subject,$message){
    
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'mohamedebrahem472001@gmail.com';                     //SMTP username
//     $mail->Password   = 'zbos ziwx gybr dcax';                               //SMTP password
//     $mail->SMTPSecure = "ssl";
//     $mail->Port='465';   
//     $mail->SMTPKeepAlive = true;  
//     $mail->Mailer = "smtp"; 
//     $mail->CharSet = 'utf-8';  
//     $mail->SMTPDebug  = 0;   
//     //$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Sender
//     $mail->setFrom('mohamedebrahem472001@gmail.com', 'Mailer');
//     $mail->addAddress('mohamedebrahem472001@gmail.com', 'Joe ');  
    
//     //Add a Reciever
//     $mail->addAddress($to);               //Name is optional
//     $mail->addReplyTo('info@example.com', 'Information');
    
//     $mail->addCC('cc@example.com');
//     $mail->addBCC('bcc@example.com');
// } catch (Exception $e) {
//   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
// }
//     Attachments
//     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = $subject;
//     $mail->Body    = $message;
//     $mail->AltBody = $message;

//     $mail->send();
//     //echo '<h1>Message has been sent</h1>';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//  }

// }

function sendGCM($title, $message, $topic, $pageid, $pagename)
{


    $url = 'https://fcm.googleapis.com/fcm/send';

    $fields = array(
        "to" => '/topics/' . $topic,
        'priority' => 'high',
        'content_available' => true,

        'notification' => array(
            "body" =>  $message,
            "title" =>  $title,
            "click_action" => "FLUTTER_NOTIFICATION_CLICK",
            "sound" => "default"

        ),
        'data' => array(
            "pageid" => $pageid,
            "pagename" => $pagename
        )

    );


    $fields = json_encode($fields);
    $headers = array(
        'Authorization: key=' . "AAAAOrBLIQ0:APA91bHIz5MV0SQ_D2b4_rbZ1-wD7g-UTcByY3J-wxRRo-68K_QMhGjwe2mWBFEvmYQiWZyRpovez0EX5CqSKccWsHvECfVW3xrQZYzTsHBL0ZDKktLutRrq-es0-4ikmiVm13CoWZxa",
        'Content-Type: application/json'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
    
}

function SendNotify($title,$body,$topic,$pageid,$pagename,$userid){
    global $con;
    $stmt = $con -> prepare("INSERT INTO `notification`(`notification_title`, `notification_body`, `notification_userid`) VALUES (?,?,?)");
    $stmt ->execute(array($title,$body,$userid));
    $count = $stmt -> rowCount();
    sendGCM($title,$body,$topic,$pageid,$pagename);
    
    return $count ;

}

