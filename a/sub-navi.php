<div id="sub-navi">
	<ul>
		<li><a href="./about-us">About Us</a></li>
		<li><a href="./meet-the-team">Meet the Team</a></li>
		<li><a href="./customer-reviews">Customer Reviews</a></li>
		<li><a href="./contact-us">Make Contact</a></li>
	</ul>
</div>

<div class="clear"></div>

<style>
	#sub-navi{margin:0 auto;display:table;padding:10px 50px;border-top:1px dashed #000;border-bottom:1px dashed #000}
	#sub-navi ul{list-style-type:none;}
	#sub-navi ul li{float:left;margin:0;}
	#sub-navi ul li:not(:last-child):after{padding:0 20px;content:"|";}
	#sub-navi ul li a{text-transform:uppercase;font-family:'Sanchez', sans-serif;font-size:0.9em}
	#sub-navi ul li a.current{font-weight:bold}
</style>

<script>
	$(function(){	
		$("a[href*='" + location.pathname + "']").addClass("current");
	});
</script>