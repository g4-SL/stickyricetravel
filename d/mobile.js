/* mobile view */
function disableSkrollr(){
    $('.skrollr_bg').each(function(){
        $(this).removeAttr("data--1100-top");
        $(this).removeAttr("data--500-top");
        $(this).removeAttr("data-anchor-target");
    });
    $('.fun_column').css({"display": "none"});
    $('.parallax .bg').each(function(){
        $(this).removeClass("desktop").addClass("mobile");
    });
    $('.parallax').each(function(){
        $(this).css({"height": 2300});
        $(this).find('.container .desc .desktop_desc').css({"display":"none"});
        $(this).find('.container .desc .mobile_desc').css({"display":"block"});
    });
}

/* desktop view */
function enableSkrollr(){
    $('.skrollr_bg').each(function(){
        $(this).attr("data--1100-top", "opacity:0");
        $(this).attr("data--500-top", "opacity:1");
        $(this).attr("data-anchor-target", "#section_" + $(this).parent().attr('rel') + "_intro .container");
    });

    $('.fun_column').css({"paddingTop": parseInt($(window).height(),10)*0.9});
    $('.parallax .bg').each(function(){
        $(this).removeClass("mobile").addClass("desktop");
    });
    $('.parallax').each(function(){
        $(this).css({"height": parseInt($(window).height(),10)*2.5});
        $(this).find('.container').css({"paddingTop": parseInt($(window).height(),10) - (parseInt($(this).find('.container .total_col').height(),10))}); 
        $(this).find('.container .desc .desktop_desc').css({"display":"block"});
        $(this).find('.container .desc .mobile_desc').css({"display":"none"});
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

function checkMobile(){
    if(isMobile.any()){
        disableSkrollr();
        console.log("entering mobile view");
    }
    else{
        enableSkrollr();
        console.log("entering desktop view");
    }
};

$(function(){
    checkMobile();
});