<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$subject = "Mail From website : cogentrix systems";
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$to = "naveen03071982@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone No.  =" . $phone ."\r\n  Message = ". $message;

if ($email and $name and $subject and $message)
{
    mail($to, $subject, $txt, $mailheader);
    echo "<script type='text/javascript'> window.location.href = 'index.html' </script>";
}
else
{
    echo "<script type='text/javascript'>alert('mail sent failed!')</script>";
}


?>