/* mobile view for parallax section */
function disableSkrollr(){
    $('.skrollr_bg').each(function(){
        $(this).removeAttr("data--1100-top");
        $(this).removeAttr("data--500-top");
        $(this).removeAttr("data-anchor-target");
    });

    $('.parallax .bg').removeClass("desktop").addClass("mobile");
    $('.fun_column').css({"display": "none"});
    $('.parallax').css({"height": 2300});
    $('.parallax').find('.container .desc .desktop_desc').css({"display":"none"});
    $('.parallax').find('.container .desc .mobile_desc').css({"display":"block"});
}

/* desktop view for parallax section */
function enableSkrollr(){
    $('.skrollr_bg').each(function(){
        $(this).attr("data--1100-top", "opacity:0");
        $(this).attr("data--500-top", "opacity:1");
        $(this).attr("data-anchor-target", "#section_" + $(this).parent().attr('rel') + "_intro .container");
    });

    $('.parallax .bg').removeClass("mobile").addClass("desktop");
    $('.fun_column').css({"paddingTop": parseInt($(window).height(),10)});
    $('.parallax').css({"height": parseInt($(window).height(),10)*2.5});
    $('.parallax').find('.container .desc .desktop_desc').css({"display":"block"});
    $('.parallax').find('.container .desc .mobile_desc').css({"display":"none"});

    $('.desc.total_col').each(function(){
        $(this).parent().css({"paddingTop": parseInt($(window).height(),10)*0.3}); 
        console.log(parseInt($(this).height(),10));
    });
}

var isMobile = { 
    Android: function() { return navigator.userAgent.match(/Android/i); }, 
    BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); }, 
    iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, 
    Opera: function() { return navigator.userAgent.match(/Opera Mini/i); }, 
    Windows: function() { return navigator.userAgent.match(/IEMobile/i); }, 
    any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } 
};

$(document).ready(function(){
    if(isMobile.any()){disableSkrollr();}
    else{enableSkrollr();}
});