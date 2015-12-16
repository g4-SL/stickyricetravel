	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="c/large/www-adventures-kinabatangan.jpg" alt="forest"/>
				<div class="ei-title"></div>
			</li>
		</ul>
	</div>
	
	<nav></nav><section>	
		<div class="container hd">	

			<div class="two columns"></div>

			<div class="sixteen columns big_title">
				<ul class="brc">
					<li><a href="/home">Home</a></li>
					<li>Booking / Contact Form</li>
				</ul>
				<h1 class="mh">Booking / Contact Form</h1>	
				<span class="required-desr">* required</span>		
			</div>		
			
			<div class="clear"></div>
				
			<form method="post" name="frm_resv" id="frm_resv" class="zn_form form contact-form">
				<div id="success"></div>
				
				<fieldset>
					
					<div class="two columns"></div>

					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-person"></i><span style="top:0;right:0">*</span></span>
							<input type="text" id="contact-your-name" name="name" class="zn_required_field input text" placeholder="Name">
						</div>
					</div>

					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-navicon-round"></i></span>
							<input type="text" id="contact-your-name" name="subject" class="input text" placeholder="Subject">
						</div>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>
					
					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-email"></i><span style="top:0;right:0">*</span></span>
							<input type="email" id="contact-your-email" name="email" class="zn_email_field zn_required_field input text" placeholder="Email">
						</div>
					</div>

					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-ios-telephone"></i></span>
							<input type="tel" id="contact-your-telephone" name="telephone" class="input text" placeholder="Telephone">
						</div>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-plane"></i></span>
							<input type="text" id="start_date" name="start-date" class="input text" placeholder="Start date">
						</div>
					</div>

					<div class="eight columns">
						<div class="control-group ">
							<span class="label"><i class="ion-plane flip"></i></span>
							<input type="text" id="finish_date" name="finish-date" class="input text" placeholder="Finish date">
						</div>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>
					
					<div class="sixteen columns">

						<div class="control-group ">
							<textarea id="contact-details" rows="30" cols="50" name="message" class="textarea zn_required_field" placeholder="Message"></textarea>
						</div>

					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent" id="sabah-parent">
						<div class="full-col" id="sabah-booking-col"></div>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent" id="sarawak-parent">
						<div class="full-col" id="sarawak-booking-col"></div>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent" id="others-parent">
						<div class="full-col" id="others-booking-col"></div>
					</div>

					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns">					
						<div class="control-group" style="margin:50px auto; text-align:center">
							<div class="controls">
								<input class="button submit-btn" id="submit-form" type="submit" name="submit" value="Enquire now">
								<input type='reset' name='reset' onclick='cls()' value='Clear' class="button clear-btn">
							</div>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</section>
	
		<script>

		    var expanded = false;
		    function showCheckboxes() {
		        var checkboxes = document.getElementById("checkboxes");
		        if (!expanded) {
		            checkboxes.style.display = "block";
		            expanded = true;
		        } else {
		            checkboxes.style.display = "none";
		            expanded = false;
		        }
		    }

				
			function cls() {
				$('input[type="checkbox"]').attr('checked', false);
				$('input').removeClass('error');
				$('textarea').removeClass('error');
			}

		$(function(){
			$.when(getJson()).done(function(data){
				var menuC = 0;
				var counterSabah = 1;
				var counterSarawak = 1;
				for (i in data.parent_product){
					temp = '';
					clear = '';
					for(j in data.parent_product[i].child){
						menuC++;
						temp = temp + '<input type="checkbox" name="p[]" class="bcb" value="' + data.parent_product[i].child[j].title + '" id="' + menuC + '"><label class="blb">' + data.parent_product[i].child[j].title + '</label>';
					}
					if(data.parent_product[i].type == "Sabah" && (counterSabah == 1 || counterSabah == 5)){
						counterSabah++;
					}
					else if (data.parent_product[i].type == "Sabah" && (counterSabah == 2 || counterSabah == 4)){
						clear = '<div class="clear contact-form-display"></div>';
						counterSabah++;
					}
					else if (data.parent_product[i].type == "Sabah" && counterSabah == 3){
						clear = '<div class="clear display"></div>';
						counterSabah++;
					}
					else if (data.parent_product[i].type == "Sabah" && counterSabah == 6){
						clear = '<div class="clear"></div>';
						counterSabah = 1;
					}
					else if(data.parent_product[i].type == "Sarawak" && (counterSarawak == 1 || counterSarawak == 5)){
						counterSarawak++;
					}
					else if (data.parent_product[i].type == "Sarawak" && (counterSarawak == 2 || counterSarawak == 4)){
						clear = '<div class="clear contact-form-display"></div>';
						counterSarawak++;
					}
					else if (data.parent_product[i].type == "Sarawak" && counterSarawak == 3){
						clear = '<div class="clear display"></div>';
						counterSarawak++;
					}
					else if (data.parent_product[i].type == "Sarawak" && counterSarawak == 6){
						clear = '<div class="clear"></div>';
						counterSarawak = 1;
					}
					$('.full-col#' + (data.parent_product[i].type).toLowerCase() + '-booking-col').append('<div class="one-third-col"><h4>' + data.parent_product[i].title + '</h4>' + temp + '</div>' + clear);
				}
			});
		});

		$(function() {
			$( "#start_date" ).datepicker({
    			minDate: 0,
        		numberOfMonths: 2,
        		onSelect: function(selected) {
        			$("#finish_date").datepicker("option","minDate", selected);
        		}
			});

			$( "#finish_date" ).datepicker({
    			minDate: 0,
        		numberOfMonths: 2,
        		onSelect: function(selected) {
        			$("#start_date").datepicker("option","maxDate", selected);
        		}
			});
		});

		(function($){
			$(document).ready(function() {

				$('#submit-form').click(function(e){
					
					var form = $('#frm_resv');
					var success = $('#success',form);
					var has_error = false;
					e.preventDefault();
					var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


					$('input.zn_required_field, textarea.zn_required_field',form).each(function(){

						if(($(this).val().length == 0 ) || ($(this).val() == 0 )) {
							
							$(this).closest('.control-group input, .control-group textarea').addClass('error');
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

					console.log($(form).serialize());
					
					$.ajax({
						type: 'POST',
						url: '../e/l.php',
						data: $(form).serialize(),
						success: function(msg){
																			
							if (msg == 'sent'){
								alert("Thank you for making a booking with Sticky Rice Travel. We will get in touch with you soon.");
								console.log(msg.Body);
								success.html('Success!')  ;

							}
							else if ( msg == 'mail_not_sent' ){
								alert("Sorry. Unable to complete booking.");
								success.html('Mail not sent')  ;
							}
							else{
								alert(msg);
							}
						}
					});

				});
			});
		})(jQuery);				

</script>	