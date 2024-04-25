<?php
//get data from form  


$name = $_POST['name'];
$email= $_POST['email'];
$subject= "TESTING";
$message= $_POST['message'];
$to = "ng.lokeshwara21@gmail.com";
$subject = "Enquiry From ABS website";
$txt ="Name = ".$name . "\r\n 
       Email = ".$email. "\r\n
       Subject  ".$subject . "\r\n 
       Message =".$message;
$headers = "From: ng.lokeshwaran21@gmail.com" . "\r\n" .
"BCC: ng.lokeshwaran21@gmail.com";
if(mail($to, $subject, $txt, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}
//redirect
// header("Location:thankyou.html");
?>
