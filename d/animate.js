$(document).ready(function() {
    //$('#accordion li.content').filter(':nth-child(n+4)').addClass('hide');
    $('#accordion li.content').addClass('hide');
	
	$('#accordion').on('click','li.title',function() {
		$(this).next().slideDown(200).siblings('li.content').slideUp(200);
		return false;
		})
});