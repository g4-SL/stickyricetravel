<script type="text/javascript">
$(document).ready(function() {
	if($('.aji').html() != null) { tempo = $('.aji').html(); } else {tempo = "";}
	$('#tit').val($('h1').text() + tempo);}
);
</script>


<h2 class="grunge7">Information / Booking</h2>
<div class="bgw pad au">
	<a href="terms" target="_blank">
		<img src="./c/terms-and-conditions.jpg" alt="Sticky Rice Travel Terms and conditions button" height="30" style="margin-top:3px;">
	</a>
	<form method="POST" name="frmBooking" style="float:right" action="./booking">
	<input name="tit" type="hidden" id="tit">
	<input name="ref" type="hidden" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
	<input class="button" id="submit-form" type="submit" name="submit" value="" style="background:url(c/book-now.jpg);width:160px">
	</form>
	<div class="clear"></div>
</div>

<div class="clear bp20"></div>

<h2 class="grunge7">Like to Travel? Like us too!</h2>
<div class="bgw pad">

<div class="padl20">
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

</div>

</div>
