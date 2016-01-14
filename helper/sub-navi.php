<div id="sub-navi-container">
	<div id="sub-navi">
		<ul>
			<li><a href="./about-us">About Us</a></li>
			<li><a href="./meet-the-team">Meet the Team</a></li>
			<li><a href="./customer-reviews">Customer Reviews</a></li>
			<li><a href="./contact-us">Make Contact</a></li>
		</ul>
	</div>
</div>

<div class="clear"></div>

<style>
#sub-navi-container{width:775px;background:url(../c/sub-navi-bg.png);margin:0 auto;}
#sub-navi{margin:0 auto;display:table;padding:18px 0 22px;}
#sub-navi ul{list-style-type:none;}
#sub-navi ul li{float:left;margin:0;}
#sub-navi ul li:not(:last-child):after{padding:0 20px;content:"|";color:#563604;}
#sub-navi ul li a{text-transform:uppercase;font-family:'Sanchez', sans-serif;font-size:0.8em;color:#563604;}
#sub-navi ul li a.current{font-weight:bold}

/* large devices */
@media (min-width:768px) and (max-width:959px){
	#sub-navi-container{width:748px}
}

/*medium screen*/
@media (min-width:480px) and (max-width:767px){
	#sub-navi-container{width:420px;background:url(../c/sub-navi-bg-small.png)}
	#sub-navi{padding:18px 50px 28px;}
	#sub-navi ul li a{font-size:0.7em}
	#sub-navi ul li:not(:last-child):after{padding:0 15px}
}

/*small screen*/
@media (max-width:479px){
	#sub-navi-container{width:300px;background:url(../c/sub-navi-bg-small.png) center center}
	#sub-navi{padding:18px 10px 28px;}
	#sub-navi ul li a{font-size:0.7em}
	#sub-navi ul li:not(:last-child):after{padding:0 15px}
}
</style>

<script>
	$(function(){	
		$("a[href*='" + location.pathname + "']").addClass("current");
	});
</script>