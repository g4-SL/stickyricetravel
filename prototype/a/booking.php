	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="c/large/www-adventures-tabin.jpg" alt="forest"/>
				<div class="ei-title"></div>
			</li>
		</ul>
	</div>
	
	<nav></nav><section>	
		<div class="container nd">		
		
			<div class="ten columns">
				<h1>Booking / Contact Form</h1>
			</div>			

			<div class="six columns">
				<ul class="brc">
					<li><a href="<?php echo $uf; ?>home">Home</a></li>
					<li>Booking / Contact Form</li>
				</ul>
			</div>	
			
			<div class="clear"></div>

			<div class="sixteen columns">
				
				<form method="post" name="frm_resv" id="frm_resv" class="zn_form form contact-form">
					
					<div id="success"></div>
					
					<fieldset>
						<div style="float:left">
						<div class="control-group ">
							<label for="contact-your-name">Name:<span class="required">*</span></label>
							<input type="text" id="contact-your-name" name="name" class="zn_required_field input text">
						</div>
						<div class="control-group ">
							<label for="contact-your-email">Email:<span class="required">*</span></label>
							<input type="text" id="contact-your-email" name="email" class="zn_email_field zn_required_field input text">
						</div>
						<div class="control-group ">
							<label for="contact-your-telephone">Telephone:</label>
							<input type="text" id="contact-your-telephone" name="telephone" class="input text">
						</div>

						<div class="control-group ">
							<label for="contact-details">Message or Booking Details:<span class="required">*</span></label>
							<textarea id="contact-details" rows="30" cols="50" name="message" class="input textarea zn_required_field"></textarea>
						</div>

						</div>

						<div class="lar2" style="float:left;width:46%">
							<ul class="P_t1" style="float:left;width:100%">
								<li>Tick the adventures that you are interested in...</li>
								<li><h4 style="font-size:27px">Sabah</h4></li>
							</ul>
							<div class="clear"></div>
							<ul class="P_t2" style="float:left;width:100%"><li><h4 style="font-size:27px">Sarawak</h4></li></ul>
						</div>
						
						<div class="clear"></div>
						
						<div class="control-group" style="margin:50px auto; text-align:center">
							<div class="controls">
								<span class="required-desr">* required</span>
								<input class="button" id="submit-form" type="submit" name="submit" value="Send" style="float:right;width:100px">
								<input type='reset' name='reset' onclick='cls()' value='Clear' class="button" style="background:#fff;float:left;width:80px">
							</div>
						</div>								
					
						
					</fieldset>
				</form>
			</div>

		</div>
	</section>
	
	<script>
		function cls() {
			$('.fi').attr('checked', false);
		}
			
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
						url: './e/l.php',
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