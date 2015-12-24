<?php 
$success = 0;

$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Telephone = Trim(stripslashes($_POST['telephone'])); 
$UserSubject = Trim(stripslashes($_POST['subject'])); 
$FromDate = Trim(stripslashes($_POST['start-date'])); 
$ToDate = Trim(stripslashes($_POST['finish-date'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$P = $_POST['p']; 

$EmailFrom = $Email;
$EmailTo = "info@stickyricetravel.com";
$Subject = "Booking from Sticky Rice Travel contact form";

$Body = "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
$Body .= "Travelling dates: ";
$Body .= $FromDate." to ".$ToDate;
$Body .= "\n\n";
$Body .= "Subject: ";
$Body .= $UserSubject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n\n";
$Body .= "Product: ";
if(($Email == "") && ($Telephone == "")) { } else {

foreach( $P as $e ) :
	$Body .= "\n";
	$Body .= Trim(stripslashes($e));
endforeach;

echo json_encode($EmailTo);
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}
if ($success == 1) {echo "sent";} else {echo "mail_not_sent";}
?>