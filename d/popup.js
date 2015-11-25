function toggle(div) {
	if ( $(div).css('display') == 'none' ) { $(div).css({'display': 'block'});}
	else { $(div).css({'display': 'none'});}
}
function position() {
	var browser_height = $(window).height();
	var popup_width = 0;
	var popup_height = 0;

	$('.popup').children().each(function(){
		popup_width = Math.max(popup_width,$(this).outerWidth(true));
		popup_height += $(this).outerHeight(true);
	});

	$('.popup').css({"width": popup_width, "height": popup_height, "top": (browser_height-popup_height)/2 + 'px', "display": "block"});
}
$(document).on('click', '.blanket', function() {
	toggle('.blanket');
	toggle('.popup');	
	$('.popup iframe').attr('src', "");
});

$(document).on('mouseenter', '.img-overlay', function() {
	$(this).find('div').css({"display":"block"});
	$(this).find('video').get(0).load();
	$(this).find('video').get(0).play();
	$(this).on('mouseleave', function(){
		$(this).find('video').get(0).pause();
		$(this).find('div').css({"display":"none"});
	});
});

$(document).ready(function () {
    $('.video-btn').click(function () {
   		$('.popup').fadeIn().html('<iframe frameborder="0"></iframe>');
   		$('.popup iframe').attr('src', $(this).attr('rel')+'?autoplay=1');
		toggle('.blanket');
    	position();
    });
});