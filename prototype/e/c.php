<?php 
$success = 0;

$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

$EmailFrom = $Email;
$EmailTo = "chat@razorbytes.com, info@stickyricetravel.com";
$Subject = "Review from Sticky Rice Travel";

$Body = "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Review: ";
$Body .= $Message;

if(($Name <> "") && ($Email <> "")) {

	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

}

if ($success == 1) {echo "sent";} else {echo "mail_not_sent";}
?>