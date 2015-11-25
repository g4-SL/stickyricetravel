jQuery.fn.center = function() {
	this.css("position","absolute");
	this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + 160 + "px");
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

$(document).ready(function(){	

	// about us description horizontally aligned with image
	if($(window).width() > 767){
		$(".about_us_description").css({paddingTop: (parseInt($(".about_us").height(),10) + parseInt($(".about_us").css('padding-top')) - parseInt($(".about_us_description p").height(),10))/2})
	}

	$('.fmenu').mobileMenu();
	
	menuC = 0;
	tempChild = '';
	var parent = [];
	var parentData = []; //{textTitle,hasChildBoolean,idmenuC}
	counterParent = 0;

	$('.list1 li a').each(function(){
		menuC++;

		if($(this).hasClass('dn')) {
			if($(this).hasClass('choice')) {
				tempChild = tempChild + '<input class="fi fichoice" name="p[]" type="checkbox" id="'+menuC+'"value="'+$(this).text()+'"><label class="fif">'+$(this).text()+'</label>';
			} else {
				if(parent[counterParent-1][1] == false){
					parent[counterParent-1][1] = true;
				}
				tempChild = tempChild + '<input class="fi fidn" name="p[]" type="checkbox" id="'+menuC+'"value="'+$(this).text()+'"><label class="fif">'+$(this).text()+'</label>';
			}
		} else {
			parentData = [$(this).text(), false, menuC];
			parent.push(parentData);
			if(counterParent > 0 && parent[counterParent-1][1] == true){
			 	($(".lio")).append('<h3>'+parent[counterParent-1][0]+'</h3><div>'+tempChild+'</div>');
			 	tempChild = '';
			}
			counterParent++;
		}
	});
	($(".lio")).append('<h3>'+parent[counterParent-1][0]+'</h3><div>'+tempChild+'</div>');
	tempChild = '';
	for(var i = 0; i < parent.length; i++){
		if(parent[i][1] == false){
			tempChild = tempChild + '<input class="fi fidn" name="p[]" type="checkbox" id="'+parent[i][2]+'"value="'+parent[i][0]+'"><label class="fif">'+parent[i][0]+'</label>';
		}
	}
 	($(".lio")).append('<h3>Others</h3><div>'+tempChild+'</div>');

});