<?php 
$success = 0;

$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Telephone = Trim(stripslashes($_POST['telephone'])); 
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
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
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