<?php
//require ('phpmailer/class.phpmailer.class.php');
require ('phpmailer/PHPMailerAutoload.php');
if(isset($_POST['sendemail'])){

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
//$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';

$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
//$mail->Port = 587;
$mail->isHTML(true);
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
 
 
$mail->Username = "revatechmanchar@gmail.com";
$mail->Password = "revatech8600840999";
 
//$mail->IsHTML(true); // if you are going to send HTML formatted emails
//$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
 
$mail->SetFrom = "revatechmanchar@gmail.com";
//$mail->FromName = "revatech";
 
$mail->addAddress("revatechmanchar@gmail.com");
//$mail->addAddress("user.2@gmail.com","User 2");
 
//$mail->addCC("user.3@ymail.com","User 3");
//$mail->addBCC("user.4@in.com","User 4");
 
$mail->Subject = "Indrapuri Bungalow :";

$contactname = $_POST['name'];
$contactcontact = $_POST['contact'];
$contactemail = $_POST['email'];
$contactmessage = $_POST['message'];

$mail->Body = "Name:- " .$contactname." 
<br>Contact:- " .$contactcontact." 
<br>Email Id:- " .$contactemail."  
<br>Message:- " .$contactmessage;
 
if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";
header('location:index.html');
}
?>