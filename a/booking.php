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

			<div class="sixteen columns big_title">
				<ul class="brc">
					<li><a href="/home">Home</a></li>
					<li>Booking / Contact Form</li>
				</ul>
				<h1 class="mh">Booking / Contact Form</h1>			
			</div>		
			
			<div class="clear"></div>

			<div class="sixteen columns">
				
				<form method="post" name="frm_resv" id="frm_resv" class="zn_form form contact-form">
					
					<div id="success"></div>
					
					<fieldset>
						<div class="bf" style="float:left">
						<div class="control-group ">
							<label for="contact-your-name" style="margin-bottom:10px">Name:<span class="required">*</span></label>
							<input type="text" id="contact-your-name" name="name" class="zn_required_field input text">
						</div>
						<div class="control-group ">
							<label for="contact-your-email" style="margin-bottom:10px">Email:<span class="required">*</span></label>
							<input type="text" id="contact-your-email" name="email" class="zn_email_field zn_required_field input text">
						</div>
						<div class="control-group ">
							<label for="contact-your-telephone" style="margin-bottom:10px">Telephone:</label>
							<input type="text" id="contact-your-telephone" name="telephone" class="input text">
						</div>

						<div class="control-group ">
							<label for="contact-details" style="margin-bottom:10px">Message or Booking Details:<span class="required">*</span></label>
							<textarea id="contact-details" rows="30" cols="50" name="message" class="input textarea zn_required_field"></textarea>
						</div>

						<div class="control-group ">
							<label for="contact-details" style="margin-bottom:10px">Adventures selected:</label>
							<div class="sw" style="float:left"></div>
						</div>

						</div>

						<div class="lar2" style="float:right;width:50%;min-height:1100px">
							<?php if(isset($_POST['tit'])) { ?>
								<label style="width:100%">You came from <u><a href="javascript:history.go(-1);">this page:</a></u></label>
								<div class="clear"></div>
								<label style="float:left;width:100%;font-size:15px;color:green" for="999"><?php echo $_POST['tit']; ?></label><br />
							<?php } ?>

							<div class="clear"></div>
							<h3>Tick the adventures that you are interested in...</h3><br />
							
							<div class="clear"></div>

							<div id="ac" class="lio"></div>

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

			var checkedItem = [];
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
				$('.fi').attr('checked', false);
				checkedItem = [];
				print();
			}

			function print(){
				temp = '';
	        	for(var i = 0; i < checkedItem.length ; i++){
	        		temp = temp + '<div class="sw-title">' + checkedItem[i] + '</div>';
	        	}
	        	$('.sw').html(temp);
			}

		(function($){
			$(document).ready(function() {

				$(function() {
					$( "#ac" ).accordion();
				});

			    $('.fi').change(function () {
			        if($(this).is(':checked')) {
			        	checkedItem.push(($(this)).attr('value'));
			        	print();
			        }
			        else{
						ri = ($(this)).attr('value');
						checkedItem = jQuery.grep(checkedItem, function(value) {
						  	return value != ri;
						});
						print();
			        }
			    });

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
								console.log(msg.EmailTo);
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