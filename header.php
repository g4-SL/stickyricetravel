<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
  	<base href="http://localhost:8888">
	<meta charset="utf-8">
	<title><?php if(isset($t)) {echo $t;} else {echo "Plan your trip to Sabah with Sticky Rice Travel";} ?></title>
	<meta name="description" content="<?php if(isset($d)) {echo $d;} else {echo "Book amazing borneo holidays with Sticky Rice Travel. We're young and ambitious travel agency in Borneo bringing you infinity and Meaningful Adventures!";} ?>">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="icon" href="/c/pa.png">
	<link rel="stylesheet" href="/b/start.css">
	<link rel="stylesheet" href="/b/skeleton.css">
	<link rel="stylesheet" type="text/css" href="/b/style.css" />
	<link rel="stylesheet" type="text/css" href="/b/style.v2.css" />
	<link rel="stylesheet" type="text/css" href="/b/popup.css" />
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<style type="text/css">
	@import "/b/jquery.datepick.css";
	</style>	
	
	<noscript><link rel="stylesheet" type="text/css" href="/b/noscript.css" /></noscript>
	
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="/d/jquery.min.js"></script>
	<script type="text/javascript" src="/d/jquery-migrate.1.2.1.min.js"></script>
	<script type="text/javascript" src="/d/jquery.eislideshow.js"></script>
	<script type="text/javascript" src="/d/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/d/jquery.ms.js"></script>
	<script type="text/javascript" src="/d/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="/d/jquery-ui.min.js"></script>	
	<script type="text/javascript" src="/d/instafeed.min.js"></script>	
	<script type="text/javascript" src="/d/moment.min.js"></script>
	<script type="text/javascript" src="/d/moment-timezone-2010-2020.min.js"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
	<script type="text/javascript" src="/d/start.js"></script>	
	<script type="text/javascript" src="/d/popup.js"></script>	
	<script type="text/javascript" src="/d/populate.js"></script>
	

</head>
<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=515985868475213&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<ul id="navi">
		<li class="home" style="width:70px;"><a href="/home" title="Home" style="width:70px;height:45px;">Home</a></li>
		<li class="ourstory" style="width:120px;"><a href="/about-us" title="Our Story" style="width:120px;height:45px;">About Us</a></li>
		<li class="adventures" style="width:130px;"><a href="/our-adventures" title="Our Adventures" style="height:75px;width:130px;">Our Adventures</a></li>
		<li class="responsible" style="width:130px;"><a href="/responsible-tourism" title="Responsible-Tourism" style="height:75px;width:130px;">Responsible Tourism</a></li>
		<li class="contact"><a href="/contact-us" title="contact-us" style="height:75px;">Make Contact</a></li>
	</ul>
	
	<div id="logo">
		<a class="l" href="./home"><img src="/c/logo.png" alt="Sticky Rice Travel Logo" ></a>
		<form id="search" action="search.php" method="GET">
			<a style="clear:right" onClick="document.getElementById('search').submit()" ></a>
			<input type="text" name="f" id="w" value="In search for..." onblur="this.value = 'In search for...';" onclick="this.value = '';">
		</form>	
	</div>