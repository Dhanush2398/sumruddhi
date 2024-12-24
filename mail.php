<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['number'];

$to =" ";
$subject = "New contact from $name";
$txt = "Name = ". $name ."\r\nMobileNumber = " . $number .  "\r\nEmail = " . $email .  "\r\nMessage =" . $message ;
$headers = "From: $name <$email>" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
