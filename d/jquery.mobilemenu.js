!function(n){function t(n){document.location.href=n}function e(){return n(".mnav").length?!0:!1}function i(t){var e=!0;return t.each(function(){n(this).is("ul")||n(this).is("ol")||(e=!1)}),e}function o(){return n(document).width()<h.switchWidth}function l(t){return n.trim(t.clone().children("ul, ol").remove().end().text())}function u(t,e,i){var o="",u="",a="";t.hasClass("current")&&(o="selected"),t.hasClass("disabled")&&(u=n(".current").length?"disabled":"selected"),a=n.trim(l(t)),a=a.replace("Â»",""),t.parent("ul ul").length&&(a=" â€“ "+a),t.parent("ul ul ul").length&&(a="â€“ "+a),t.parent("ul ul ul ul").length&&(a="â€“ "+a),i?n('<option value="'+t.find("a:first").attr("href")+'" '+o+" "+u+">"+i+"</option>").appendTo(e):n('<option value="'+t.find("a:first").attr("href")+'" '+o+" "+u+">"+a+"</option>").appendTo(e)}function a(t,e){t.children("ul, ol").each(function(){n(this).children("li").each(function(){u(n(this),e),n(this).each(function(){var t=n(this),i=e;a(t,i)})})})}function c(e){var i=n('<select id="mm'+s+'" class="mnav">');s++,h.topOptionText&&u(n('<li class="disabled"><a href="#">'+h.topOptionText+"</a></li>"),i),e.children("li").each(function(){var t=n(this);t.children("ul, ol").length?(u(t,i),a(t,i)):u(t,i)}),i.change(function(){t(n(this).val())}).prependTo(h.prependTo)}function r(){o()&&!e()&&$menus.each(function(){c(n(this))}),o()&&e()&&n(".mnav").show(),!o()&&e()&&(n(".mnav").hide(),$menus.show(),n("#navi").center())}var h={prependTo:"nav",switchWidth:996,topOptionText:"Select a page:"},s=0;n.fn.mobileMenu=function(t){t&&n.extend(h,t),i(n(this))?($menus=n(this),r(),n(window).resize(function(){r()})):alert("mobileMenu only works with <ul>/<ol>")}}(jQuery);