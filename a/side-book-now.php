<script type="text/javascript">
$(document).ready(function() {
	if($('.aji').html() != null) { tempo = $('.aji').html(); } else {tempo = "";}
	$('#tit').val($('h1').text() + tempo);}
);
</script>

<div class="au2">
	<form method="POST" name="frmBooking" action="./booking">
	<input name="tit" type="hidden" id="tit">
	<input name="ref" type="hidden" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
	<input class="button" id="submit-form" type="submit" name="submit" value="" style="background:url(c/book-now-1.jpg);width:320px;height:71px;">
	</form>
	<div class="clear"></div>
</div>

