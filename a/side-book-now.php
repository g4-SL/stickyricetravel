<script type="text/javascript">
$(document).ready(function() {
	if($('.aji').html() != null) { tempo = $('.aji').html(); } else {tempo = "";}
	$('.au2 form #tit').val($('h1').text() + tempo);
});
</script>

<div class="au2">
	<form method="POST" name="frmBooking" action="./booking" style="margin-bottom:0;height:80px">
		<input name="tit" type="hidden" id="tit">
		<input name="ref" type="hidden" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
		<input class="bn" id="submit-form" type="submit" name="submit" value="Book Now" >
	</form>
	<div class="clear"></div>
</div>

