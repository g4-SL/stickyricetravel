<script type="text/javascript" src="./d/sb.js"></script>


<h2 class="grunge7">Information / Booking</h2>
<div class="bgw pad au">

	<?php if($p[1] == "hibiscus-villa") { ?>
	<a href="<?php echo $uf;?>terms-hibiscus-villa" target="_blank"><img src="<?php echo $uf;?>c/terms-and-conditions.jpg" alt="Sticky Rice Travel Terms and conditions button"></a>
	<?php } else { ?>
	<a href="<?php echo $uf;?>terms" target="_blank"><img src="<?php echo $uf;?>c/terms-and-conditions.jpg" alt="Sticky Rice Travel Terms and conditions button"></a>
	<?php } ?>
	<a href='#book'><img src="<?php echo $uf;?>c/book-now.jpg"></a>
	
	<div class="clear"></div>
</div>

<div class="clear bp20"></div>

<h2 class="grunge7">Like to Travel? Like us too!</h2>
<div class="bgw pad">

<div class="padl20">

<?php if($ts == 0) { ?>
<script type="text/javascript">

//<![CDATA[

document.write('<span style="float:left;margin-top:41px" class="fb-like" data-href="<?php echo curPageURL(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></span><span style="float:left;margin-left:20px;margin-top:41px"><a href="https://twitter.com/share" class="twitter-share-button" data-via="StickyRiceSabah" data-related="StickyRiceSabah">Tweet</a></span><span style="margin-bottom:10px;float:left;margin-left:10px;"><g:plusone size="tall"></g:plusone></span>');

//]]>

</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class="clear"></div>

<script type="text/javascript">
  
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  
</script>
<?php } ?>
</div>

<div id="kr">
	<a name="book"></a>
	<h2 class="grunge6" style="margin-top:29px">Booking</h2>
	<div class="pad" style="background:#bcfbdb">

		<form method="post" name="frm_resv" id="frm_resv" class="zn_form form contact-form">
			<a name="book" id="book"></a>
			<div id="success"></div>
	
			<fieldset>
				
				<input type="hidden" name="wbe" value="<?php echo curPageURL();?>">
				
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
					<textarea id="contact-details" rows="30" cols="50" name="message" style="border:1px solid #ccc" class="input textarea zn_required_field"></textarea>
				</div>

				<input type="checkbox" name="chk_lst" id="chk_lst" style="float:left" onclick="if($('#chk_lst').is( ':checked' )) { $('#kr2').show();} else {$('#kr2').hide();}"><label for="chk_lst" style="width:80%">I'm also interested in other adventures...</label>
				
				<div class="clear"></div>
				<span class="required-desr">* required</span>
				<div class="clear"></div>
				
				<div style="clear:both;display:none;width:100%" id="kr2">
				<ul class="P_t1" style="float:left;width:100%"><li><h4 style="font-size:27px">Sabah</h4></li></ul>
				<div class="clear"></div>
				<ul class="P_t2" style="float:left;width:100%"><li><h4 style="font-size:27px">Sarawak</h4></li></ul>
				</div>
			
				<div class="clear"></div>
				
				<div class="control-group" style="margin:50px auto; text-align:center">
					<div class="controls">
						
						<input class="button submit-form" id="submit-form" type="button" name="submit" value="Send" style="float:right;width:90px">
						<input type='reset' name='reset' onclick='cls()' value='Clear' class="button" style="background:#fff;float:left;width:80px">
					</div>
				</div>								
			
			</fieldset>	
		</form>
		<div class="clear"></div>
	</div>
	
</div>

</div>
