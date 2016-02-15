	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="c/large/www-booking.jpg" alt=""/>
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
				<h3 class="sub-text-description">
					Should you require further information or wish to make a booking for any of our tours, please complete and submit the enquiry form below. Our travel consultants will reply you within 24 hours (Monday to Friday).
				</h3>	
			</div>		

			<div class="clear"></div>
				
			<form method="post" name="frm_resv" id="frm_resv" class="zn_form form contact-form">
				
				<?php if ($_POST["tit"] != ''){ ?>
				<div class="two columns"></div>
				<div class="sixteen columns"><h4 class="margin-0">You came from <a href='<?php echo $_POST["ref"]; ?>' style="text-transform:uppercase" id="history_link"><?php echo $_POST["tit"]; ?></a> page</h4></div>
				<?php } ?>
				
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

					<div class="sixteen columns full-col-parent border" id="sabah-parent">
						<ul class="full-col horizontal-align" id="sabah-booking-col"></ul>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent border" id="sarawak-parent">
						<ul class="full-col horizontal-align" id="sarawak-booking-col"></ul>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent" id="multi-parent">
						<ul class="full-col horizontal-align" id="multi-booking-col"></ul>
					</div>
						
					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns full-col-parent" id="others-parent">
						<ul class="full-col horizontal-align" id="others-booking-col"></ul>
					</div>

					<div class="clear"></div>
					
					<div class="two columns"></div>

					<div class="sixteen columns">					
						<div class="control-group form-btn">
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
	
	<script type="text/javascript">
		var menuC = 0;
			
		function cls() {
			$('input[type="checkbox"]').attr('checked', false);
			$('input').removeClass('error');
			$('textarea').removeClass('error');
		}

		function sameHeight(){
			var $el, rowDivs = new Array(), topPosition = 0, currentRowStart = 0, currentTallest = 0;
			$('.one-third-col').each(function(){
				$el = $(this);
				$el.css('height','auto'); 
				topPosition = $el.position().top;
				if (currentRowStart != topPosition) {
					for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				       rowDivs[currentDiv].height(currentTallest);
				    }
				    rowDivs.length = 0;
				    currentRowStart = topPosition;
				    currentTallest = $el.height();
				    rowDivs.push($el);
				} else {
				 	rowDivs.push($el);
				 	currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
				}
				for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
			     	rowDivs[currentDiv].height(currentTallest);
			   	}
			});
		}

		function printInputBox(data){
			var res = '';
			if(!data.hasOwnProperty('child')){
				res = '<input type="checkbox" name="p[]" class="bcb" value="' + data.title + '" id="' + menuC + '"><label class="blb">' + data.title + '</label>';
			} else {
				for(var i in data.child){
					res = res + printInputBox(data.child[i]);
				}
			} 
			return res;
		}

		$(function(){
			$.when(getJson()).done(function(data){
				for (i in data.url_group[OUR_ADVENTURES].child){
					temp = printInputBox(data.url_group[OUR_ADVENTURES].child[i]);
					$('.full-col#' + (data.url_group[OUR_ADVENTURES].child[i].type).toLowerCase() + '-booking-col').append('<li class="one-third-col"><h4>' + data.url_group[OUR_ADVENTURES].child[i].title + '</h4>' + temp + '</li>');
				}
				var var_name = 'input[type="checkbox"][value="' + $('#history_link').text() + '"]';
				$(var_name).attr("checked", true);

				sameHeight();
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

		$(window).resize(function () {
		    sameHeight();
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
					
					$.ajax({
						type: 'POST',
						url: '../e/l.php',
						data: $(form).serialize(),
						success: function(msg){
																			
							if (msg == 'sent'){
								alert("Thank you for making a booking with Sticky Rice Travel. We will get in touch with you soon.");
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