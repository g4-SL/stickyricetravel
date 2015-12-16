jQuery.fn.center = function() {
	this.css("position","absolute");
	this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + 220 + "px");
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
	$('.ei-slider-v2').css({height: 895});
	$('.divider').append('<div class="arrow" id="left"><img src="../c/about-us/arrow-left.png" style="width:100%"></div><div class="arrow" id="right"><img src="../c/about-us/arrow-right.png" style="width:100%"></div>');
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

$(document).on('click', '.divider .arrow', function() {
	var $parent = $(this).parent().parent().find('ul');
	var $current_li = $parent.find('li:visible');
    $current_li.hide();
    if($(this).attr('id') == "right"){
	    if($current_li.next().length == 0){
	    	$parent.find('li:first').toggle("slide", {direction:'right'}, 300);
	    }
	    else{
	    	$current_li.next().toggle("slide", {direction:'right'}, 300);
	    }
    }
    else if($(this).attr('id') == "left"){
	    if($current_li.prev().length == 0){
	    	$parent.find('li:last').toggle("slide", {direction:'left'}, 300);
	    }
	    else{
	    	$current_li.prev().toggle("slide", {direction:'left'}, 300);
	    }
    }
});

$(window).load(function(){
	skrollr.init({
	    smoothScrolling: true,
	    forceHeight: false,           
        mobileCheck: function() {
            return false;
        }
	});
});

$(document).ready(function(){	
	var customer_review_bg = ["www-base-red-langur","www-base-elephant","www-base-2"];

	$('.crsl').slick({
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [{
		  breakpoint: 1024,
		  settings: {
		    slidesToShow: 3,
		    slidesToScroll: 3,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
		    slidesToShow: 2,
		    slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
		    slidesToShow: 1,
		    slidesToScroll: 1
		  }
		}]
	});

	// change parallax background whenever carousel item is swapped
	$('.single_item_carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  	$("#home_bg_1").css({"background": "linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),url(../c/large/" + customer_review_bg[nextSlide] + ".jpg", "background-size":"cover", "background-attachment": "fixed"});
	});

	$('.single_item_carousel').slick({
		rtl: true
	});

	// about us description horizontally aligned with image
	if($(window).width() > 767){
		$(".about_us_description").css({paddingTop: (parseInt($(".about_us").height(),10) + parseInt($(".about_us").css('padding-top')) - parseInt($(".about_us_description p").height(),10))/2})
	}

	$('.fmenu').mobileMenu();

});