<?php 
$success = 0;

$wbe = Trim(stripslashes($_POST['wbe']));
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Telephone = Trim(stripslashes($_POST['telephone'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$P = $_POST['p']; 

$EmailFrom = $Email;

if($EmailFrom == "chat@razorbytes.com") {
	$EmailTo = "chat@razorbytes.com";
} else {		
	$EmailTo = "info@stickyricetravel.com";
}

$Subject = "Booking from Sticky Rice Travel contact form";

$Body = "Referral Link: ";
$Body .= $wbe;
$Body .= "\n";
$Body .= "Name: ";
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

foreach( $P as $e ) :
	$Body .= "\n";
	$Body .= Trim(stripslashes($e));
endforeach;

if(($Name <> "") && ($Email <> "")) {

	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
	echo $Body;
}

if ($success == 1) {echo "sent";} else {echo "mail_not_sent";}
?>