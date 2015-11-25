<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $t; ?></title>
	<meta name="description" content="<?php echo $d;?>">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="icon" href="<?php echo $uf; ?>c/pa.png">
	<link rel="stylesheet" href="<?php echo $uf; ?>b/start.css">
	<link rel="stylesheet" href="<?php echo $uf; ?>b/skeleton.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $uf; ?>b/style.css" />
	<style type="text/css">@import "<?php echo $uf; ?>b/jquery.datepick.css";</style>	
	<noscript><link rel="stylesheet" type="text/css" href="<?php echo $uf; ?>b/noscript.css" /></noscript>
	
	<?php if($ts == 0) { ?>
	<link href='http://fonts.googleapis.com/css?family=Chelsea+Market' rel='stylesheet' type='text/css' />	
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="<?php echo $uf; ?>d/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $uf; ?>d/jquery.eislideshow.js"></script>
	<script type="text/javascript" src="<?php echo $uf; ?>d/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $uf; ?>d/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="<?php echo $uf; ?>d/start.js"></script>	

	<script>
	var XmlHttpObj;var model_group;var textValue;var maker_group;var model_type;var model_link;var pm;var v;var co = 0;
	</script>
	
	<script>
	function CreateXmlHttpObj(){try{XmlHttpObj = new XMLHttpRequest();} catch (e){try{XmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try {XmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");}catch(oc){XmlHttpObj = null;}}}}
	function quest() {var requestUrl;requestUrl = "<?php echo $uf; ?>our-adventures.xml";CreateXmlHttpObj();if(XmlHttpObj){XmlHttpObj.onreadystatechange = StateChangeHandler_load;XmlHttpObj.open("GET", requestUrl,  true);XmlHttpObj.send(null);}}
	
	function StateChangeHandler_load(){
		if(XmlHttpObj.readyState == 4){
			if(XmlHttpObj.status == 200){
				
				pm = XmlHttpObj.responseXML.documentElement;
				P_footer(pm);
				
				<?php if($p[1] == "our-adventures") {?>
					P_model(pm);
					<?php if(isset($p[2])) {?>selectByValue('<?php echo $p[2];?>');<?php } ?>
				<?php } ?>
				
				<?php if (in_array($p[1],$cg)) {?>
					P_t(pm);
				<?php } ?>
				
				<?php if ($p[1] == "booking") {?>
					P_booking(pm);
				<?php } ?>

			}
		}
	}
	
	function P_booking(ModelNode){

		var ModelNodes = ModelNode.getElementsByTagName("Model");		
		var listk1 = $(".P_t1");var listk2 = $(".P_t2");
		
		for (var count = 0; count < ModelNodes.length; count++)	{

			maker_group = ModelNodes[count].getAttribute("maker_group");
			textValue = ModelNodes[count].firstChild.nodeValue;
			textValue = textValue.replace(/\\"/g,'"').replace(/\\'/g,"'");
			model_type = ModelNodes[count].getAttribute("model_type");
			model_link = ModelNodes[count].getElementsByTagName("o")[0].firstChild.nodeValue;

			if (maker_group == "Sabah"){lst = listk1;} else if (maker_group == "Sarawak") {lst=listk2;}
			
			if(model_type == "c") {
				ur = '<a target="_blank" href="<?php echo $uf;?>our-adventures/'+model_link+'">view</a>';
				$('<li class="c1"><input type="checkbox" name="p[]" id="'+model_link+'" value="'+textValue+'" class="chk1"><label for='+model_link+'><b>'+textValue+' ('+ur+')</b></label></li>').appendTo(lst);
			} else {
				ur = '<a target="_blank" href="<?php echo $uf;?>'+model_link+'">view</a>';
				$('<li class="c2"><input type="checkbox" name="p[]" id="'+model_link+'" value="'+textValue+'" class="chk2"><label for='+model_link+'>'+textValue+' ('+ur+')</label></li>').appendTo(lst);	
			}
		}	
	}		
	
	function P_footer(ModelNode){

		var ModelNodes = ModelNode.getElementsByTagName("Model");
		var list1 = $(".list1");var list2 = $(".list6");		
		
		for (var count = 0; count < ModelNodes.length; count++)	{

			maker_group = ModelNodes[count].getAttribute("maker_group");
			model_type = ModelNodes[count].getAttribute("model_type");
			textValue = ModelNodes[count].firstChild.nodeValue;
			
			model_group = ModelNodes[count].getAttribute("model_group");
			model_link = ModelNodes[count].getElementsByTagName("o")[0].firstChild.nodeValue;
			
			if(model_type == "c") {

				for (var count2 = 0; count2 < ModelNodes.length; count2++)	{
					v = ModelNodes[count2].getAttribute("model_group");
					m = ModelNodes[count2].getAttribute("model_type");

					if (m == "n" && model_group == v){co++;}
				}
				
				if (maker_group == "Sabah"){lst = list1;} else if (maker_group == "Sarawak") {lst=list2;}
				
				<?php if($p[1] != "our-adventures") { ?>
				$('<li><a href="<?php if($p[1] != "our-adventures") { echo $uf."our-adventures/"; } ?>'+model_link+'">'+textValue+' <span class="'+model_link+'" style="color:#999">('+co+')</span></a></li>').appendTo(lst);
				<?php } else { ?>
				$('<li><a href="javascript:selectByValue(\''+model_link+'\');$(window).scrollTop(0);selectByValueDestination(\''+maker_group+'\')">'+textValue+' <span class="'+model_link+'" style="color:#999">('+co+')</span></a></li>').appendTo(lst);	
				<?php } ?>
				
				co = 0;
			
			}
		}
	}

	$(document).ready(function(){
		quest();
		<?php if($p[1] == "our-adventures") { ?>
		setTimeout( chk_blank, 1200 );
		<?php } ?>
	});
	
	</script>
</head>
<body>

	<?php if($ts == 0) { ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=515985868475213&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php } ?>
	
	<ul id="navi">
		<li class="home" style="width:70px;"><a href="<?php echo $uf; ?>home" title="Home" style="width:70px;height:45px;">Home</a></li>
		<li class="blog" style="width:70px;"><a href="<?php echo $uf; ?>blog" title="Blog" style="width:70px;height:45px;">Blog</a></li>
		<li class="ourstory" style="width:120px;"><a href="<?php echo $uf; ?>about-us" title="About Us" style="width:120px;height:45px;">About Us</a></li>
		<li class="adventures" style="width:130px;"><a href="<?php echo $uf; ?>our-adventures" title="Our Adventures" style="height:75px;width:130px;">Our Adventures</a></li>
		<li class="photographs-of-borneo" style="width:90px;"><a href="<?php echo $uf; ?>photographs-of-borneo" title="Photographs of Borneo" style="width:90px;height:45px;">Gallery</a></li>
		<li class="responsible" style="width:130px;"><a href="<?php echo $uf; ?>responsible-tourism" title="Responsible Tourism" style="height:75px;width:130px;">Responsible Tourism</a></li>
		<li class="contact"><a href="<?php echo $uf; ?>contact-us" title="Contact Us" style="height:75px;">Make Contact</a></li>
		<li class="ourfriends"><a href="<?php echo $uf; ?>our-friends" title="Our Friends" style="height:75px;">Our Friends</a></li>
	</ul>
	
	<div id="logo">
		<a class="l" href="./home"><img src="<?php echo $uf; ?>c/logo.png" alt="Sticky Rice Travel Logo" ></a>
		<form id="search" action="<?php echo $uf; ?>site_search/" method="GET">
			<a style="clear:right" onClick="document.getElementById('search').submit()" ></a>
			<input type="text" name="f" id="w" value="In search for..." onblur="this.value = 'In search for...';" onclick="this.value = '';">
		</form>		
	</div>