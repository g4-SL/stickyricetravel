jQuery.fn.center = function() {
	this.css("position","absolute");
	this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + 180 + "px");
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {this.css("position","absolute");} else {this.css("position","fixed");}	
	return this;
}		

$(function() {
	$("#navi").center();
	var d=300;
	$('#navi a').each(function(){
		var $this = $(this);
		var r=Math.floor(Math.random()*41)-20;
		$this.css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
		$('#content').css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
		$this.stop().animate({
			'marginTop':'-70px'                       
		},d+=150);
	});
	$('#navi > li').hover(
		function () {
			var $this = $(this);
			$('a',$this).stop().animate({
				'marginTop':'-40px'
			},200);
		},
		function () {
			var $this = $(this);
			$('a',$this).stop().animate({
				'marginTop':'-70px'
			},200);
		}
	)	
});

$(function() {
	var max_height = 0;
	$('.same_height').each(function(){
		$(this).find('section .mt div').each(function(){
			max_height = Math.max(max_height, $(this).height());
		});
		$(this).find('.mt div').css({height: max_height});
		max_height = 0;
	});
});

$(function() {
	$('.ei-slider-v2').css({height: 895});
	$('.hd .big_title h1').after('<div class="short_line"></div>');
	$('.hd .big_title p:nth-child(4)').css({"paddingTop": 20}); 
});

$(function() {
	$('#sly').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 3000,
		titlesFactor		: 0
	});
});

var currentYear = (new Date).getFullYear();
  $(document).ready(function() {
  $("#copyright-year").text( (new Date).getFullYear() );
  });

$(document).ready(function(){	

	// about us description horizontally aligned with image
	if($(window).width() > 767){
		$(".about_us_description").css({paddingTop: (parseInt($(".about_us").height(),10) + parseInt($(".about_us").css('padding-top')) - parseInt($(".about_us_description p").height(),10))/2})
	}

	$('.fmenu').mobileMenu();

});