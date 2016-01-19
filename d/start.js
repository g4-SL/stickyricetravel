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
	var max_height = 0, counter = 0;
	$('.same_height').each(function(){
		$(this).find('section .mt div').each(function(){
			max_height = Math.max(max_height, $(this).height());
		});
		$(this).find('.mt div').css({height: max_height});
		max_height = 0;
	});

	$('.category-listing').each(function(){
		$(this).find('.columns').each(function(){
			counter++;
		});
		$(this).prev().css({"height": counter/4*290});
		counter = 0;
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

$(document).on('click', 'ul.sub-navi li a', function(e){
    var section = $(this).attr("rel");
    $('html, body').animate({
        scrollTop: $(section).offset().top
    }, 500);
    e.preventDefault();
});

/* -------------------------------------------------------------------------------------------
	POPULATE PRODUCT BOX WITH RELEVANT INFORMATION BASED ON JSON
	------------------------------------------------------------------------------------------- */

var MAX_RATING = 5;

function getJson(){	
	return $.ajax({
		dataType: "json",
		url: "../f/product_summary.json",
		success: function(data){
			return;
		}
	});
}

function rate(val, data){
	var temp = "";
	var k;
	var lim_rating = Math.min(data[val], MAX_RATING);
	if(data[val] == 0){
		return '<h6>N/A</h6>';
	}
	for(k = 1; k <= lim_rating; k++){
		temp = temp + '<img src="../c/' + val + '.png">';
	}
	while(k <= MAX_RATING){
		temp = temp + '<img src="../c/' + val + '_fade.png">';
		k++;
	}
	return temp;
}

function listCategory(arrCategory){
	var i = arrCategory.length;
	var res = ""; 

	while(i--){
		res = res + arrCategory[i] + ", ";
	}
	return ("<h6>" + res + "</h6>");
}

function isCategoryFound(compareWith, product){
	var i = product.category.length;
	while(i--){
		if(product.category[i] == compareWith){
			return true;
		}
	}
}

function printProduct(product){
	str_img = '<img src="' + product.image + '" class="img1" alt="' + product.title + '"/>';
	str_title = '<h2>' + product.title + '</h2>';
	str_details = '<div class="rating accommodation"><h3>Lodging</h3>' + rate('accommodation', product) + '</div><div class="rating difficulty"><h3>Difficulty</h3>' + rate('difficulty', product) + '</div><div class="clear"></div><div class="category"><h3>Category</h3>' + listCategory(product.category) + '</div>';
	res = '<div class="sm columns product_box"><div class="img_boxing"><a href="' + product.url + '">' + str_img + str_title + str_details + '</a></div></div>';
	return res;
}

function getUrlCategory(category){
	switch(category){
		case "Accommodation":
			return "../travel-by-interest/accommodation";
			break;
		case "Jungle Trekking":
			return "../travel-by-interest/jungle-trekking";
			break;
		case "Wildlife":
			return "../travel-by-interest/wildlife";
			break;
		case "Cave":
			return "../travel-by-interest/cave";
			break;
		case "Climbing":
			return "../travel-by-interest/climbing";
			break;
		case "Culture":
			return "../travel-by-interest/culture";
			break;
		case "Beach":
			return "../travel-by-interest/beach";
			break;
		case "Water Sports":
			return "../travel-by-interest/water-sports";
			break;
		case "River Cruise":
			return "../travel-by-interest/river-cruise";
			break;
		case "Day Trip":
			return "../travel-by-interest/day-trip";
			break;
		default:
			break;
	}
}

/* populate category page with relevant product */
function getDetailsBasedOnCategory(category){	
	var res = "", counter = 0;
	$.when(getJson()).done(function(data){
		for (var i in data.parent_product){
			for (var j in data.parent_product[i].child){
				if(isCategoryFound(category, data.parent_product[i].child[j])){
					$(".category-listing").append(printProduct(data.parent_product[i].child[j]));
					counter++;
				}
			}
		}

		$('.lh .one.columns.white-space-listing').css({"height": counter/4*$('.category-listing .sm.columns').height()});
	});
}

function getDetails(compareWith, compareWithChild){
	$.when(getJson()).done(function(data){
		var i = 0, arr, counter = 0;
		loop1: 
		for (i in data.parent_product){
			if(data.parent_product[i].title == compareWith && compareWithChild == ""){
				arr = data.parent_product[i].child;
				break loop1;
			}
			else if(data.parent_product[i].title == compareWith){
				loop2:
				for (var l in data.parent_product[i].child){
					if(data.parent_product[i].child[l].title == compareWithChild){
						arr = data.parent_product[i].child[l].child;
						break loop1;
					}				
				}				
			}
		}

		for (var j in arr){
			$(".product-listing").append(printProduct(arr[j]));
			counter++;
		}

		$('.lh .one.columns.white-space-listing').css({"height": counter/4*$('.product-listing .sm.columns').height()});
	});
}

function populateSidebar(product_parent, product_child){
	$.when(getJson()).done(function(data){
		var i = 0;
		for (i in data.parent_product){
			if(data.parent_product[i].title == product_parent){
				break;
			}
		}

		for (var j in data.parent_product[i].child){
			if(data.parent_product[i].child[j].title == product_child){
				var temp = "";
				for(var pd in data.parent_product[i].child[j].category){
					var category = data.parent_product[i].child[j].category[pd];
					temp = temp + '<li><a href="' + getUrlCategory(category) + '">' + category + "</a></li>";
				}
				$('.product_side ul.category').append(temp);
				$('.product_side ul.difficulty li a').append(rate('difficulty', data.parent_product[i].child[j]));
				$('.product_side ul.accommodation li a').append(rate('accommodation', data.parent_product[i].child[j]));
				break;
			}
		}
	});
}

/* -------------------------------------------------------------------------------------------
	HANDLE POPUP EVENT IN OROU SAPULOT PAGE
	------------------------------------------------------------------------------------------- */

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

$(document).ready(function(){	

	$('.fmenu').mobileMenu();

    $('.video-btn').click(function () {
   		$('.popup').fadeIn().html('<iframe frameborder="0"></iframe>');
   		$('.popup iframe').attr('src', $(this).attr('rel')+'?autoplay=1');
		toggle('.blanket');
    	position();
    });
});