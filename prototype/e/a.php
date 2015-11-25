<?php

$success = 0;

$txt_start_date = Trim(stripslashes($_POST['txt_start_date'])); 
$txt_staff_name = Trim(stripslashes($_POST['txt_staff_name'])); 
$rdo_planning_booking = Trim(stripslashes($_POST['rdo_planning_booking'])); 
$ta_planning_booking = Trim(stripslashes($_POST['ta_planning_booking'])); 
$rdo_itinerary_suitable = Trim(stripslashes($_POST['rdo_itinerary_suitable'])); 
$ta_itinerary_suitable = Trim(stripslashes($_POST['ta_itinerary_suitable'])); 
$rdo_performance = Trim(stripslashes($_POST['rdo_performance'])); 
$ta_performance = Trim(stripslashes($_POST['ta_performance'])); 
$rdo_vehicles = Trim(stripslashes($_POST['rdo_vehicles'])); 
$ta_vehicles = Trim(stripslashes($_POST['ta_vehicles'])); 
$rdo_meals = Trim(stripslashes($_POST['rdo_meals'])); 
$ta_meals = Trim(stripslashes($_POST['ta_meals'])); 
$rdo_accommodation = Trim(stripslashes($_POST['rdo_accommodation'])); 
$ta_accommodation = Trim(stripslashes($_POST['ta_accommodation'])); 
$rdo_overall = Trim(stripslashes($_POST['rdo_overall'])); 
$ta_overall = Trim(stripslashes($_POST['ta_overall'])); 
$ta_special_mention = Trim(stripslashes($_POST['ta_special_mention'])); 
$ta_negative = Trim(stripslashes($_POST['ta_negative'])); 
$txt_name = Trim(stripslashes($_POST['txt_name'])); 
$txt_hear = Trim(stripslashes($_POST['txt_hear'])); 
$rdo_newsletter = Trim(stripslashes($_POST['rdo_newsletter'])); 
$txt_email = Trim(stripslashes($_POST['txt_email'])); 

if(($txt_email <> "") && ($rdo_newsletter <> "") && ($txt_hear <> "")) {

$EmailFrom = $txt_email;
if($EmailFrom == "chat@razorbytes.com") {
	$EmailTo = "chat@razorbytes.com";
} else {
	$EmailTo = "info@stickyricetravel.com";
}
$Subject = "Feedback from ".$txt_name;

$Body = "Tour start date (mm/dd/yyyy): ".$txt_start_date."\n";
$Body .= "Consultant Name : ".$txt_staff_name."\n";
$Body .= "Planning and booking experience : ".$rdo_planning_booking."\n";
$Body .= "Comment : ".$ta_planning_booking."\n\n";
$Body .= "Itinerary Suitable : ".$rdo_itinerary_suitable."\n";
$Body .= "Comment : ".$ta_itinerary_suitable."\n\n";
$Body .= "Guide Performance : ".$rdo_performance."\n";
$Body .= "Comment : ".$ta_performance."\n\n";
$Body .= "Vehicles : ".$rdo_vehicles."\n";
$Body .= "Comment : ".$ta_vehicles."\n\n";
$Body .= "Meals : ".$rdo_meals."\n";
$Body .= "Comment : ".$ta_meals."\n\n";
$Body .= "Accommodation : ".$rdo_accommodation."\n";
$Body .= "Comment : ".$ta_accommodation."\n\n";
$Body .= "Overall : ".$rdo_overall."\n";
$Body .= "Comment : ".$ta_overall."\n\n";
$Body .= "Special Mention : ".$ta_special_mention."\n\n";
$Body .= "Negative : ".$ta_negative."\n\n";
$Body .= "Name : ".$txt_name ."\n";
$Body .= "Hear : ".$txt_hear."\n";
$Body .= "Newsletter : ".$rdo_newsletter."\n";
$Body .= "Email : ".$txt_email."\n";


$success = 1;
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

}

if ($success == 1) {echo "sent";} else {echo "Failed\n".str_replace("\n","<br />",$Body);}

?>