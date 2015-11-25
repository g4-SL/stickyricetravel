<div id="sly" class="ei-slider">
	<ul class="ei-slider-large">
		<li>
			<img src="<?php if(isset($p[2])) { echo "../";} ?>c/large/www-collage-feedback.jpg" alt="Borneo Adventures"/>
		</li>
	</ul>
</div>

<nav></nav><section>	
			
<div class="container nd hd lh">

<?php

function read_all($se) {
  $flag = "";	
  $file = fopen('./database/hashtag-20150512.txt', 'r');

  $se = ((trim($se) == "") ? "--=Do-not-=Disturb--" : $se);
  
  while (!feof($file)) {
    $line = fgets($file);
	$line = ((trim($line) <> "") ? $line : "--empty--");
	
	
	if(trim(strpos($line, $se)) <> "") {

		$dr = explode("<|||>",$line);
		$flag = $dr;	

	}
	

  }
  fclose($file);
  return $flag;
}

$drs = read_all($p[2]);

$txt_email = isset($drs[1]) ? $drs[1] : "" ;
$txt_name = isset($drs[2]) ? $drs[2] : "" ;

if($txt_email <> "") {	
?>
		
<form method="post" name="frm_cmt" id="frm_cmt" class="zn_form form form2">
	<fieldset>
	
		<div class="seven columns">
			<h1>Feedback Form</h1>
		</div>			

		<div class="nine columns">
			<ul class="brc">
				<li><a href="./home">Home</a></li>
				<li>Feedback Form</li>
			</ul>
		</div>
		
		<div class="clear"></div>
				
		<script type="text/javascript" src="<?php if(isset($p[2])) { echo "../";} ?>d/jquery.datepick.min.js"></script>
		<script type="text/javascript">
		$(function() {$('#popupDatepicker').datepick();});
		</script>		

		<div class="eight columns">
			<div class="control-group">
				<label for="txt_start_date">Start Date of Tour</label>
				<input type="text" name="txt_start_date" id="popupDatepicker">
			</div>
			
			<div class="control-group ">
				<label for="txt_staff_name" class="jac">Name of Sticky Rice Travel Sales Consultant:</label>
				<input type="text" name="txt_staff_name">
			</div>
			
			<div class="control-group ftf">
				<label for="rdo_planning_booking" class="jac">How was your trip planning and booking experience with our sales consultant?</label>

				<input type="radio" class="radio" name="rdo_planning_booking" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_planning_booking" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_planning_booking" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_planning_booking" value="4">Outstanding

			</div>
			
			
			<div class="control-group">
				<label for="ta_planning_booking" class="pt20">Additional Comments:</label>
				<textarea name="ta_planning_booking"></textarea>
			</div>	


			
			<div class="control-group ftf">
				<label for="rdo_itinerary_suitable">Was the itinerary suitable:</label>
				<input type="radio" class="radio" name="rdo_itinerary_suitable" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_itinerary_suitable" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_itinerary_suitable" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_itinerary_suitable" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_itinerary_suitable" class="pt20">Additional Comments:</label>
				<textarea name="ta_itinerary_suitable"></textarea>
			</div>
			
			<div class="control-group ftf">
				<label for="rdo_performance" class="jac">Guide Performance<br />eg. Language skills, helpfulness, enthusiasm etc.</label>
				<input type="radio" class="radio" name="rdo_performance" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_performance" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_performance" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_performance" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_performance" class="pt20">Additional Comments:</label>
				<textarea name="ta_performance"></textarea>
			</div>						
			
			
			<div class="control-group ftf">
				<label for="rdo_vehicles">Quality of vehicles provided:</label>
				<input type="radio" class="radio" name="rdo_vehicles" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_vehicles" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_vehicles" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_vehicles" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_vehicles" class="pt20">Additional Comments:</label>
				<textarea name="ta_vehicles"></textarea>
			</div>			
			
			<div class="control-group ftf">
				<label for="rdo_meals">Quality of meals included (if applicable):</label>
				<input type="radio" class="radio" name="rdo_meals" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_meals" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_meals" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_meals" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_meals" class="pt20">Additional Comments:</label>
				<textarea name="ta_meals"></textarea>
			</div>		
			
			<div class="control-group ftf">
				<label for="rdo_accommodation">Quality of Accommodation:</label>
				<input type="radio" class="radio" name="rdo_accommodation" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_accommodation" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_accommodation" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_accommodation" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_accommodation" class="pt20">Additional Comments:</label>
				<textarea name="ta_accommodation"></textarea>
			</div>			
			
			<div class="control-group ftf">
				<label for="rdo_overall">Your Overall Experience:</label>
				<input type="radio" class="radio" name="rdo_overall" value="1">Below expectation<br />
				<input type="radio" class="radio" name="rdo_overall" value="2">Met expectation<br />
				<input type="radio" class="radio" name="rdo_overall" value="3">Exceeded expectation<br />
				<input type="radio" class="radio" name="rdo_overall" value="4">Outstanding
			</div>
			
			
			<div class="control-group">
				<label for="ta_overall" class="pt20">Additional Comments:</label>
				<textarea name="ta_overall"></textarea>
			</div>	
		
		</div>

		<div class="eight columns">	

			<div class="control-group">
				<label for="ta_special_mention" class="jac">Would you like to make any special mention of positive experiences, or staff that you would like us to know about?</label>
				<textarea name="ta_special_mention"></textarea>
			</div>	

			<div class="control-group">
				<label for="ta_negative" class="jac">Did you have any negative experiences, as we would like the opportunity to look into these and improve them?</label>
				<textarea name="ta_negative"></textarea>
			</div>					
			
			<div class="control-group pt20">
				<label for="txt_name">Name:</label>
				<input type="text" name="txt_name" value="<?php echo $txt_name; ?>">
			</div>					

			<br />
			<br />
			<br />
			<br />
						
			<div class="control-group ">
				<label for="txt_hear" class="jac">How did you hear about us?<span class="required">*</span></label>
				<input type="text" name="txt_hear" class="zn_required_field input">
			</div>						
			

			<div class="control-group ftf">
				<label for="rdo_newsletter" class="jac">Would you like to receive the Sticky Rice Travel Newsletter?<span class="required">*</span></label>
				
				<input type="radio" class="radio rdo_newsletter_yes" name="rdo_newsletter" value="Yes">Yes
				<input type="radio" class="radio rdo_newsletter_no" name="rdo_newsletter" value="No">No			

			</div>	

			<div class="control-group pt20">
				<label for="txt_email">Email<span class="required">*</span></label>
				<input type="text" name="txt_email" value="<?php echo $txt_email; ?>" class="zn_email_field zn_required_field input text">		
			</div>	
		</div>

		<div class="sixteen columns">

			<input class="button" id="submit-form" type="submit" name="submit" style="float:left;width:40%">
			<div class="clear"></div>
			<br /><br /><br /><br />
			
			<p style="font-weight:bold">
				Thank you for your time.<br /><br />
				Sticky Rice Travel		
			</p>	
		
			<div id="success" style="line-height:20px"></div>
		</div>
		
	</fieldset>
</form>

<script>

(function($){
	$(document).ready(function() {

		$('#submit-form').click(function(e){
			
			var form = $('#frm_cmt');
			var success = $('#success',form);
			var has_error = false;
			e.preventDefault();
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

			if($( '.rdo_newsletter_yes' ).is( ":checked" ) || ($( '.rdo_newsletter_no' ).is( ":checked" ))) {$('.rdo_newsletter_yes').closest('.control-group').removeClass('error');} else {$('.rdo_newsletter_yes').closest('.control-group').addClass('error');has_error = true;}					

			$('input.zn_required_field',form).each(function(){

				if(($(this).val().length == 0 ) || ($(this).val() == 0 )) {
					
					$(this).closest('.control-group input').addClass('error');
					has_error = true;

				}
				else if( $(this).hasClass( 'zn_email_field' ) && reg.test($(this).val()) == false ) {
					$(this).closest('.control-group input').addClass('error');
					has_error = true;

				}
				else {
					$(this).closest('.control-group input').removeClass('error');

				}

			});
			
			if(has_error) {
				alert("Incomplete Submission");
				return false;
			}

			$.ajax({
				type: 'POST',
				url: '../e/a.php',
				data: $(form).serialize(),
				success: function(msg){
																				
					if (msg == 'sent'){
						alert("Feedback sent.");
						success.html('Feedback sent');
					} else {
						alert("Sorry, unable to send feedback.");
						success.html('Unable to send feedback.');
					}
					
				}
			});

		});
	});
})(jQuery);			
</script>

<?php } else { ?>

<div class="seven columns">
	<h1>Feedback Form</h1>
</div>	

<div class="nine columns">
	<ul class="brc">
		<li><a href="./home">Home</a></li>
		<li>Feedback Form</li>
	</ul>
</div>

<div class="clear"></div>			
			
<div class="sixteen columns">
	<p>Sorry, This is a by invitation only feedback.</p>
</div>

<?php } ?>
		
	</div>
</section>