<?php
header('Location: http://ella.ils.indiana.edu/~pvijaya/'); 
$header = "Reply-to: Puri <pvijaya@umail.iu.edu>\r\n";
$header .= "Return-Path: Puri <pvijaya@umail.iu.edu>\r\n";
$header .= "From: Puri <pvijaya@umail.iu.edu>\r\n";
$header .= "Organization: Electro Productions\r\n";
$header .= "Content-Type: text/plain\r\n";


$mailMessage01 = <<<EOD
An information request has been received.\r\n
\r\n
First Name:  {$_REQUEST['name']}\r\n
Email: {$_REQUEST['email']}\r\n
Phone: {$_REQUEST['phone']}\r\n
Message: {$_REQUEST['message']}\r\n
EOD;

$mailMessage02 = <<<EOD
Your submission has been received by Ryan Juszkiewicz.Here is the information you submitted.\r\n
\r\n
First Name:  {$_REQUEST['name']}\r\n
Email: {$_REQUEST['email']}\r\n
Phone: {$_REQUEST['phone']}\r\n
Message: {$_REQUEST['message']}\r\n
EOD;

mail('purnimavijaya@gmail.com', "Enquiry message from {$_REQUEST['email']}", $mailMessage01, $header);
mail($_REQUEST['email'], "Your Application has been Sent", $mailMessage02, $header)
?>
