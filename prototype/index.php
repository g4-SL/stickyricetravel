<?php 

$ts = 0;

function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  
        '/[^\S ]+\</s',  
        '/(\s)+/s'       
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

$p = explode("/", $_SERVER['REQUEST_URI'] );

$ignore = array("photo-galleries-fauna",
			"photo-galleries-flora-of-borneo",
			"photo-galleries-landscape-of-borneo",
			"photo-galleries-people-of-borneo");

//ADVENTURES GROUP			
$gt = array("danum-valley","dvfc",
			"kinabatangan",
			"tabin",
			"maliau-basin",
			"semporna-archipelago",
			"crocker-range",
			"sandakan",
			"mount-kinabalu",
			"orou-sapulot",
			"day-trips-sabah",			
			"kudat",
			"kota-belud",
			"bako-national-park",
			"ulu-ai",
			"mulu-national-park",
			"day-trips-sarawak"
		);

//ADVENTURES SINGLE
$cg = array("custom-trips", //last Img link from email do not work

		//DANUM VALLEY
			"borneo-rainforest-lodge", //q1
			"3d2n-dvfc", //q1
			"4d3n-dvfc", //q1
			"sungai-purut", //q1
			"wild-jungles-to-luxury", //q1
			"mt-danum", //q1
			
			//KINABATANGAN
			"abai-homestay", //q1
			"ecocamp-kinabatangan", //q1
			"supu-camp-kinabatangan", //q1
			"homestay-supu-camp", //q1
			"borneo-nature-lodge", //q1
			"wetlands-resort", //q1

			//TABIN
			"tabin-wildlife-reserve", //q1
			
			//MALIAU BASIN
			"4d3n-maliau", //q1
			"5d4n-maliau", //q1
			
			//SEMPORNA ARCHIPELAGO
			"mataking-resort", //q1 <!--http://www.airasia.com/my/en/where-we-fly/flight-schedule.page-->
			"seaventures-dive-rig", //q1
			
			//CROCKER RANGE NATIONAL PARK
			"gunung-alab-hike", //q1
			"mt-trus-madi", //q1
			
			//SANDAKAN
			"libaran-turtle-island-camping", //q1
			"lankayan", //q1
			
			//Kinabalu National Park Area
			"mount-kinabalu-climb", //q1
			"mountain-torq-ferrata", //q1
			"lows-peak-circuit", //q1
			"mt-kinabalu-camping", //q1
			"kampung-tambatuon", //q1
			
			//Orou Sapulot - Murut Country Adventure
			"3d2n-sapulot", //q1
			"4d3n-sapulot", //q1
			
			//Sabah Daytrips
			"sea-kayaking-kota-kinabalu", //q1
			"stand-up-paddle-boarding", //q1
			"water-rafting", //q1
			"tunku-abdul-rahman-park", //q1
			"mh-cooking-class", //q1
			
			//Kudat
			"hibiscus-villa", //q1
			"hibiscus-beach-retreat", //q1
			
			//Kota Belud
			//"manana-beach-getaway", no write-up
			"manana-borneo", //q1
			
			//Bako National Park
			"bako", //lom media
			//Ulu Ai 
			"nanga-sumpa", //q1
			"nanga-sumpa-lubuk-kasai", //q1
			"lubuk-kasai-jungle", //q1
			"longhouse-trek", //q1
			"redape-trail", //lom media source do not work
			//Mulu National Park
			"mulu-showcaves", //q1
			"mulu-showcaves-and-pinnacles", //q1
			"headhunter-trail", //q1
			//Sarawak Daytrips
			"santubong-wildlife-cruise", //lom source not working
			"rainforest-kayaking-adventure" //q1
			
);



		
//PAGES
$c = array("about-us", 
			"blog", 
			"our-adventures", 
			"custom-trips", 
			"photographs-of-borneo", 
			"photo-galleries-fauna",
			"photo-galleries-flora-of-borneo",
			"photo-galleries-landscape-of-borneo",
			"photo-galleries-people-of-borneo",
			"responsible-tourism",
			"contact-us",
			"booking",
			"terms",
			"terms-hibiscus-villa",
			"customer-reviews",
			"privacy-policy",
			"our-friends",
			"unsubscribe",
			"how-is-sticky-rice-travel-doing",
			"site_search",
			"hibiscus-villa-faq"
			);


// SITE MAP GENERATOR		
if($p[1] == "sitemap.xml") {
	header( 'Content-Type: text/xml; charset=utf-8' );
	$xm = "";
			
	foreach ($c as $value) {
	
	$xm .= '<url>
			<loc>http://www.stickyricetravel.com/'.$value.'</loc>
			<changefreq>monthly</changefreq>
		</url>';
	}
			
	foreach ($cg as $value) {
	
		if($value <> "custom-trips") {
		
		$xm .= '<url>
				<loc>http://www.stickyricetravel.com/'.$value.'</loc>
				<changefreq>monthly</changefreq>
			</url>';
		}
	}
			
	foreach ($gt as $value) {
	
	$xm .= '<url>
			<loc>http://www.stickyricetravel.com/our-adventures/'.$value.'</loc>
			<changefreq>monthly</changefreq>
		</url>';
	}
	
	echo 
	'<?xml version="1.0" encoding="UTF-8"?>
	<urlset
		  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
		  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
		  xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
				http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
				<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->
				<url>
				<loc>http://www.stickyricetravel.com/</loc>
				<changefreq>monthly</changefreq>
				</url>
				'.$xm.
	'</urlset>';
	exit();
	
}			

//OLD URLS < 2015		
if($p[1] == "borneo") {$p[1] = "our-adventures";}			
if($p[1] == "batu-punggul-and-sapulot") {$p[1] = "orou-sapulot";}		
if($p[1] == "monkey-dives") {$p[1] = "our-adventures";}		
if($p[1] == "danum-explorer") {$p[1] = "sungai-purut-exploration";}
//OLD URLS == 2015
if($p[1] == "day-trips") {$p[1] = "our-adventures";$p[2] = "day-trips-sabah";}
if($p[1] == "mount-kinabalu") {$p[1] = "our-adventures";$p[2] = "mount-kinabalu";}
if($p[1] == "orou-sapulot") {$p[1] = "our-adventures";$p[2] = "orou-sapulot";}
if($p[1] == "kiulu-river-whitewater-rafting") {$p[1] = "water-rafting";}
if($p[1] == "padas-white-water-rafting") {$p[1] = "water-rafting";}
if($p[1] == "semporna-archipelago") {$p[1] = "our-adventures";$p[2] = "semporna-archipelago";}
if($p[1] == "maliau-basin") {$p[1] = "our-adventures";$p[2] = "maliau-basin";}
if($p[1] == "kinabatangan") {$p[1] = "our-adventures";$p[2] = "kinabatangan";}
if($p[1] == "danum-valley") {$p[1] = "our-adventures";$p[2] = "danum-valley";}
if($p[1] == "danum-valley-field-center") {$p[1] = "our-adventures";$p[2] = "danum-valley";}
if($p[1] == "expedition-to-mt-danum") {$p[1] = "mt-danum";}
if($p[1] == "sungai-purut-exploration") {$p[1] = "sungai-purut";}


//START	
if($p[1] == "about-us") {
	$t = "About Us | Meaningful Adventures with Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We're young and ambitious travel agency in Borneo bringing you infinity and Meaningful Adventures!";
}		
			
if($p[1] == "blog") {
	$t = "Blog | Meaningful Adventures with Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Check out interesting write-ups and videos about our adventures in Borneo. Meaningful Adventures!";
}	
			
if($p[1] == "our-adventures") {
	$t = "Travel, Trips, Package Holidays and more in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We offer trips, holidays packages, tours, mountain climbing, diving and more Meaningful Adventures!";
}

//DANUM VALLEY

if($p[1] == "borneo-rainforest-lodge") {
	$t = "Borneo Adventure Tourism, Sandakan Tour, Rainforest Lodge";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Stay in a 5 star lodge and experience wilderness and nature in Danum Valley. Meaningful Adventures!";
}

if($p[1] == "sungai-purut-exploration") {
	$t = "Danum Valley. Sungai Purut Exploration. Danum Expedition.";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "expedition-to-mt-danum") {
	$t = "Danum Valley. Expedition to Mt.Danum. Danum Expedition.";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "wild-jungles-to-luxury") {
	$t = "Danum Valley. Wild Jungles to Luxury.";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

//KINABATANGAN

if($p[1] == "abai-homestay") {
	$t = "Abai Homestay Sabah. Borneo Travel & Borneo Adventures";
	$d = "Book amazing borneo holidays with Sticky Rice. We encourage tourists to consider home stay arrangements while visiting Borneo. Meaningful Adventures!";
}

if($p[1] == "ecocamp-kinabatangan") {
	$t = "Eco Camp Kinabatangan, Borneo Eco Tour Adventures";
	$d = "Book amazing borneo holidays with Sticky Rice. Stay at the only accommodation on Kinabatangan that is located in a forest reserve. Meaningful Adventures!";
}

if($p[1] == "supu-camp-kinabatangan") {
	$t = "Supu Camp Kinabatangan, River Cruise in Sabah Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice. Borneo River Cruise, forest trekking, spot wildlife, explore limestone caves & more. Meaningful Adventures";
}

if($p[1] == "homestay-supu-camp") {
	$t = "Homestay Borneo, Supu Camp & Kinabatangan River Cruise";
	$d = "Book amazing borneo holidays with Sticky Rice. Supu Camp, Homestay, River Cruise, spot wildlife, explore limestone caves and more. Meaningful Adventures!";
}

if($p[1] == "borneo-nature-lodge") {
	$t = "Borneo Nature Lodge, Sabah Tourism, Borneo Itinerary";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

//rest

if($p[1] == "gunung-alab-hike") {
	$t = "Gunung Alab Hike, Borneo Adventure";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous 2 day trek in Crocker Range. Enjoy beautiful views, plants and birds. Meaningful Adventures!";
}

if($p[1] == "mt-trus-madi") {
	$t = "Mt Trus Madi Trek, Adventure Kota Kinabalu Itinerary";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

if($p[1] == "mt-kinabalu-camping") {
	$t = "Mt Kinabalu Camping, Amazing Borneo Tours";
	$d = "Book amazing borneo holidays with Sticky Rice. Trekking, swim in waterfall, search for reptiles, amphibians, flora, fauna and more. Meaningful Adventures";
}

//Semporna Archipelago

if($p[1] == "seaventures-dive-rig") {
	$t = "Seaventures Dive Rig, Best Diving Packages in Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice. Best Diving packages and diving Resort in Malaysia. Dive Mabul, Kapalai and Sipadan. Meaningful Adventures";
}

if($p[1] == "mataking-resort") {
	$t = "Mataking Resort, Malaysian Resorts, island and beaches";
	$d = "Book amazing borneo holidays with Sticky Rice. Great staff, beautiful villas, mesmerizing aquamarine and white powder sand beaches. Meaningful Adventures";	
}

//rest

if($p[1] == "kampung-tambatuon") {
	$t = "Tambatuon Village, Sabah Holiday Package and Tourism";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "tabin-wildlife-reserve") {
	$t = "Tabin Wildlife Adventure, Resort and Borneo Itinerary";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover mud volcano and the rich variety of jungle herbs, birds, plants, animals. Meaningful Adventures!";	
}

//Day Trips

if($p[1] == "sea-kayaking-kota-kinabalu") {
	$t = "Day Trip, Sea Kayaking for when you Travel to Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice. Enjoy sea kayaking at Tunku Abdul Rahman Marine Park for your Kota Kinabalu Trip. Meaningful Adventures!";	
}

if($p[1] == "tunku-abdul-rahman-park") {
	$t = "Diving Tunku Abdul Rahman Park (TARP), Diving Malaysia";
	$d = "Book amazing borneo holidays with Sticky Rice. Diving in Malaysia at Tunku Abdul Rahman Park, explore local reefs, fishes and more. Meaningful Adventures";	
}

if($p[1] == "water-rafting") {
	$t = "Day Trip, white water rafting in Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Try Padas white water rafting Sabah reachable by Train, pure adrenaline rush. Meaningful Adventures";	
}

//

if($p[1] == "mount-kinabalu-climb") {
	$t = "Mt Kinabalu Package, Mount Kinabalu Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

if($p[1] == "mountain-torq-ferrata") {
	$t = "Mountain Torq via Ferrata, Mount Kinabalu Package";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Mount Kinabalu, Mountain Torq via Ferrata Itinerary all inclusive package. Meaningful Adventures!";	
}

if($p[1] == "libaran-turtle-island-camping") {
	$t = "Libaran Turtle Island Camping, Sandakan Tour & Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. It's not camping, its glamping! Visit turtle island borneo, Libaran, Sabah Island. Meaningful Adventures!";	
}

if($p[1] == "stand-up-paddle-boarding") {
	$t = "SUP: Stand Up Paddle Boarding";
	$d = "Try amazing borneo activities with Sticky Rice. Paddle away from the rippling shores of Sapi Island in search of hidden sights and snorkeling grounds.";	
}

if($p[1] == "custom-trips") {
	$t = "Meaningful Custom Trips with Sticky Rice Travel Agency";
	$d = "Book amazing borneo holidays with Sticky Rice. Plan a trip or even a group trip. No worries on question like help me plan a trip. Meaningful Adventures!";	
}

//

if($p[1] == "lankayan") {
	$t = "Lankayan Island Resort - Sulu Sea, Sandakan.";
	$d = "Resort, unpopulated and circled by white sandy shore, private, perfect for honeymooners and anyone seeking peace and tranquility. Meaningful Advantures!";	
}

//Photographs

if($p[1] == "photographs-of-borneo") {
	$t = "Beach pictures, Borneo, Kinabalu, Sabah Photographs";
	$d = "Book amazing borneo holidays with Sticky Rice. Photographs of Borneo Attractions, islands, beaches, natures and people of Borneo. Meaningful Adventures!";	
}

if($p[1] == "photo-galleries-fauna") {
	$t = "Amazing photographs of fauna in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. View Beautiful photographs of Borneo in our Fauna Gallery. Meaningful Adventures!";	
}

if($p[1] == "photo-galleries-flora") {
	$t = "Amazing photographs of flora in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. View Beautiful photographs of Borneo in our Flora Gallery. Meaningful Adventures!";	
}

if($p[1] == "photo-galleries-landscape-of-borneo") {
	$t = "Amazing photographs of landscape in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. View Beautiful photographs of landscape in our Lanscape Gallery. Meaningful Adventures!";	
}

if($p[1] == "photo-galleries-people-of-borneo") {
	$t = "Amazing photographs of people in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. View Beautiful photographs of people in our People of Borneo Gallery. Meaningful Adventures!";	
}

if($p[1] == "responsible-tourism") {
	$t = "Responsible Tourism, eco travel packages";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We're proud responsible tourism agency, environment, cultures, communities, conservation and more.";	
}

if($p[1] == "contact-us") {
	$t = "Contact us to make a booking with Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Get a meaningful adventures when you make booking for your trip to Borneo. View our contact details";	
}

if($p[1] == "booking") {
	$t = "Make a booking with Sticky Rice Travel Agency";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Get a meaningful adventures when you make booking for your trip to Borneo. Make a booking today!";	
}

if($p[1] == "terms") {
	$t = "Sticky Rice Travel's Booking Terms and Conditions";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Read cancellation policy, terms and conditions, deposit refundable and more. Make a booking today!";	
}

if($p[1] == "customer-reviews") {
	$t = "Read about Sticky Rice travel reviews, holiday reviews";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Read what our customer have to say about us. Let them convince you choose us. Make a booking today!";	
}

if($p[1] == "privacy-policy") {
	$t = "What we collect from our site visitors";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Privacy Policy, read what information we collect from our site visitors. Meaningful Adventures!";	
}

if($p[1] == "our-friends") {
	$t = "Friends of Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Take a look at some of our friends, it is worth it. Let them be part of your trip in Borneo too.";	
}

if(!isset($t)) {
	$t = "Plan your trip to Sabah with Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We're young and ambitious travel agency in Borneo bringing you infinity and Meaningful Adventures!";
}

function curPageURL() {return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";}


//Start
if(!isset($t)) {$t="Plan your trip to Sabah with Sticky Rice Travel";}
if(!isset($d)) {$d="Book amazing borneo holidays with Sticky Rice Travel. We're young and ambitious travel agency in Borneo bringing you infinity and Meaningful Adventures!";}
if(isset($p[3])) {$uf = "../../";} else if(isset($p[2])) {$uf="../";} else {$uf="./";$p[2] = "";}
if(!isset($p[3])) {$p[3] = "";}

ob_start("sanitize_output");
include './header.php';


if (in_array($p[2],$gt)) {

	include "./a/our-adventures.php";

} else if ((in_array($p[1],$c)) || (in_array($p[1],$cg))) {
	
	include "./a/".$p[1].".php";	
	
} else if ($p[1] == "showmethemoney") {

	echo "<style>
			#kr {display:none}
			ul#navi {position: absolute !important}
		</style>";

	include "./a/home.php";

	foreach($cg as $value) {
		if (!in_array($value,$ignore)) {
			include "./a/".$value.".php";
		}
	}
	
	foreach($c as $value) {
		if (!in_array($value,$ignore)) {
			include "./a/".$value.".php";
		}
	}	


} else if ($p[1] == "showmethesingles") {
	
	echo "<style>
			#kr {display:none}
			ul#navi {position: absolute !important}
		</style>";
	
	foreach($cg as $value) {
		if (!in_array($value,$ignore)) {
			
			include "./a/".$value.".php";
		}
	}
	
} else if ($p[1] == "showmethepages") {
	
	echo "<style>
			#kr {display:none}
			ul#navi {position: absolute !important}
		</style>";
		
	foreach($c as $value) {
		if (!in_array($value,$ignore)) {
			include "./a/".$value.".php";
		}
	}	

} else {
	
	include "./a/home.php";
}

include './footer.php';
?>