<?php 
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

$lvlone = array("about-us", 
			"our-adventures",
			"responsible-tourism",
			"contact-us",
			"booking",
			"terms",
			"customer-reviews",
			"privacy-policy",
			"our-friends",
			"unsubscribe",
			"how-is-sticky-rice-travel-doing");

$our_adventures = array("crocker-range-park",
			"danum-valley",
			"kinabalu-national-park",
			"kinabatangan",
			"kota-belud",
			"kota-kinabalu",
			"kudat",
			"maliau-basin",
			"orou-sapulot",
			"sandakan-and-sepilok",
			"semporna-archipelago",
			"tabin-wildlife-reserve",
			"custom-trips");

$crocker_range_park = array("day-trip",
			"gunung-alab-hike",
			"mt-trus-madi",
			"sinurambi-bed-and-breakfast");

$danum_valley = array("borneo-rainforest-lodge",
			"danum-valley-field-center");

$danum_valley_field_center = array("expedition",
			"explorer",
			"jungle-to-luxury",
			"purut-camping");

$kinabalu_national_park = array("camping",
			"day-trip",
			"mount-kinabalu-climb",
			"mountain-torq-ferrata");

$kinabatangan = array("abai-homestay",
			"borneo-nature-lodge",
			"ecocamp",
			"supu-camp",
			"kinabatangan-wetlands-resort");

$kota_belud = array("kampung-tambatuon",
			"manana-borneo");

$kota_kinabalu = array("borneo-orchard-house",
			"cycling-programs",
			"diving-and-snorkeling",
			"kayak-and-snorkel-safari",
			"momma-house-cooking-class",
			"white-water-rafting");

$kudat = array("hibiscus-beach-retreat",
			"hibiscus-villa",
			"northern-island-exploration");

$sandakan_and_sepilok = array("accommodation",
			"lankayan-island",
			"libaran-turtle-island-camping",
			"orang-utan-and-turtles",
			"sepilok-sojourn");

$accommodation = array("nak-hotel",
			"paganakan-dii-tropical-retreat",
			"sepilok-forest-edge",
			"sepilok-nature-resort",
			"sheraton-four-points");

$semporna_archipelago = array("mataking-resort",
			"seaventures-dive-rig");
			

/* Site Map Generator			
foreach ($c as $value) {
?>
<url>
  <loc>http://www.stickyricetravel.com/<?php echo $value; ?></loc>
  <changefreq>monthly</changefreq>
</url>
<?php }			
*/

//OLD URLS			
if($p[1] == "borneo") {$p[1] = "our-adventures";}			
if($p[1] == "batu-punggul-and-sapulot") {$p[1] = "orou-sapulot";}		
if($p[1] == "monkey-dives") {$p[1] = "our-adventures";}			

//START
			
if($p[1] == "about-us") {
	$t = "About Us | Meaningful Adventures with Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We're young and ambitious travel agency in Borneo bringing you infinity and Meaningful Adventures!";
}		
			
if($p[1] == "our-adventures") {
	$t = "Our Adventures | Travel, Trips, Package Holidays and more in Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. We offer trips, holidays packages, tours, mountain climbing, diving and more Meaningful Adventures!";
}

//DANUM VALLEY

if($p[1] == "danum-valley") {
	$t = "Borneo Adventure Tourism, Danum Valley, Sabah Packages";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Now is the best time to visit Borneo, especially Danum Valley in Malaysia. Meaningful Adventures!";
}

if($p[1] == "danum-valley-borneo-rainforest-lodge") {
	$t = "Danum Valley | Borneo Rainforest Lodge";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Stay in a 5 star lodge and experience wilderness and nature in Danum Valley. Meaningful Adventures!";
}

if($p[1] == "danum-valley-field-center") {
	$t = "Danum Valley Accommodation, Field Center, Sabah Travel";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "danum-purut-camping") {
	$t = "Danum Valley | Sungai Purut Camping";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "danum-expedition") {
	$t = "Danum Valley | Expedition to Mt. Danum";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "danum-jungle-to-luxury") {
	$t = "Danum Valley | Wild Jungles to Luxury";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "danum-explorer") {
	$t = "Danum Valley | DVFC Explorer";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

//KINABATANGAN

if($p[1] == "kinabatangan") {
	$t = "Things to do in Borneo, Travel and Visit Kinabatangan";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Experience Kinabatangan River Cruise, accommodation, homestay and tours. Meaningful Adventures!";
}

if($p[1] == "kinabatangan-abai-homestay") {
	$t = "Kinabatangan | Abai Homestay Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice. We encourage tourists to consider home stay arrangements while visiting Borneo. Meaningful Adventures!";
}

if($p[1] == "kinabatangan-ecocamp") {
	$t = "Kinabatangan | Eco Camp, Borneo Eco Tour Adventures";
	$d = "Book amazing borneo holidays with Sticky Rice. Stay at the only accommodation on Kinabatangan that is located in a forest reserve. Meaningful Adventures!";
}

if($p[1] == "kinabatangan-supu-camp") {
	$t = "Kinabatangan | Supu Camp, River Cruise in Sabah Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice. Borneo River Cruise, forest trekking, spot wildlife, explore limestone caves & more. Meaningful Adventures";
}

if($p[1] == "kinabatangan-wetlands-resort") {
	$t = "Kinabatangan | Kinabatangan Wetlands Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. Supu Camp, Homestay, River Cruise, spot wildlife, explore limestone caves and more. Meaningful Adventures!";
}

if($p[1] == "kinabatangan-borneo-nature-lodge") {
	$t = "Kinabatangan | Borneo Nature Lodge";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

// SANDAKAN AND SEPILOK

if($p[1] == "sandakan-and-sepilok") {
	$t = "Sandakan & Sepilok";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-sepilok-sojourn") {
	$t = "Sandakan & Sepilok | Sepilok Sojourn";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-libaran-turtle-island-camping") {
	$t = "Sandakan & Sepilok | Libaran Turtle Island Camping";
	$d = "Book amazing borneo holidays with Sticky Rice. It's not camping, its glamping! Visit turtle island borneo, Libaran, Sabah Island. Meaningful Adventures!";	
}

if($p[1] == "ss-orang-utan-and-turtles") {
	$t = "Sandakan & Sepilok | Orang Utans & Turtles";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-lankayan-island") {
	$t = "Sandakan & Sepilok | Lankayan Island";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "sandakan-and-sepilok-accommodation") {
	$t = "Sandakan & Sepilok Accommodation";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-accommodation-sepilok-nature-resort") {
	$t = "Sepilok | Sepilok Nature Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-accommodation-sepilok-forest-edge") {
	$t = "Sepilok | Sepilok Forest Edge";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-accommodation-paganakan-dii-tropical-retreat") {
	$t = "Sepilok | Peganakan Dii Tropical Retreat";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-accommodation-sheraton-four-points") {
	$t = "Sandakan | Sheraton Four Points";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "ss-accommodation-nak-hotel") {
	$t = "Sandakan | Nak Hotel";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

// CROCKER RANGE PARK

if($p[1] == "crocker-range-park") {
	$t = "Crocker Range Park, Borneo Adventure";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous 2 day trek in Crocker Range. Enjoy beautiful views, plants and birds. Meaningful Adventures!";
}

if($p[1] == "crocker-range-park-gunung-alab-hike") {
	$t = "Crocker Range Park | Gunung Alab Hike";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous 2 day trek in Crocker Range. Enjoy beautiful views, plants and birds. Meaningful Adventures!";
}

if($p[1] == "crocker-range-park-mt-trus-madi") {
	$t = "Crocker Range Park | Mt Trus Madi Trek";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

if($p[1] == "crocker-range-park-day-trip") {
	$t = "Crocker Range Park | Crocker Range Park";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

if($p[1] == "crocker-range-park-sinurambi-bed-and-breakfast") {
	$t = "Crocker Range Park | Sinurambi Bed & Breakfast";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

// SEMPORNA ARCHIPELAGO

if($p[1] == "semporna-archipelago") {
	$t = "Semporna Archipelago, Best Diving Borneo Holidays";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Stay in dive resort or oilrig for diving in Mabul, Kapalai, Sipadan and more. Meaningful Adventures";
}

if($p[1] == "semporna-seaventures-dive-rig") {
	$t = "Semporna Archipelago | Seaventures Dive Rig, Best Diving Packages in Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice. Best Diving packages and diving Resort in Malaysia. Dive Mabul, Kapalai and Sipadan. Meaningful Adventures";
}

if($p[1] == "semporna-mataking-resort") {
	$t = "Semporna Archipelago | Mataking Resort, Malaysian Resorts, island and beaches";
	$d = "Book amazing borneo holidays with Sticky Rice. Great staff, beautiful villas, mesmerizing aquamarine and white powder sand beaches. Meaningful Adventures";	
}

// KINABALU NATIONAL PARK

if($p[1] == "kinabalu-national-park") {
	$t = "Kinabalu National Park";
	$d = "Book amazing borneo holidays with Sticky Rice. Great staff, beautiful villas, mesmerizing aquamarine and white powder sand beaches. Meaningful Adventures";	
}

if($p[1] == "kinabalu-national-park-camping") {
	$t = "Kinabalu National Park | Mt Kinabalu Camping, Amazing Borneo Tours";
	$d = "Book amazing borneo holidays with Sticky Rice. Trekking, swim in waterfall, search for reptiles, amphibians, flora, fauna and more. Meaningful Adventures";
}

if($p[1] == "kinabalu-national-park-mountain-torq-ferrata") {
	$t = "Kinabalu National Park | Mountain Torq via Ferrata, Mount Kinabalu Package";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Mount Kinabalu, Mountain Torq via Ferrata Itinerary all inclusive package. Meaningful Adventures!";	
}

if($p[1] == "kinabalu-national-park-mount-kinabalu-climb") {
	$t = "Kinabalu National Park | Mt Kinabalu Package, Mount Kinabalu Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

if($p[1] == "kinabalu-national-park-day-trip") {
	$t = "Kinabalu National Park | Day Trip";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

// KOTA BELUD

if($p[1] == "kota-belud") {
	$t = "Kota Belud";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

if($p[1] == "kota-belud-kampung-tambatuon") {
	$t = "Kota Belud | Tambatuon Village, Sabah Holiday Package and Tourism";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-belud-manana-borneo") {
	$t = "Kota Belud | Manana Borneo, Sabah Holiday Package and Tourism";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

// KUDAT

if($p[1] == "kudat") {
	$t = "Kudat";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kudat-northern-island-exploration") {
	$t = "Kudat | Northern Island Exploration";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

if($p[1] == "kudat-hibiscus-villa") {
	$t = "Kudat | Hibiscus Villa";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

if($p[1] == "kudat-hibiscus-beach-retreat") {
	$t = "Kudat | Hibiscus Beach Retreat";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

// KOTA KINABALU

if($p[1] == "kota-kinabalu") {
	$t = "Kota Kinabalu";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-kayak-and-snorkel-safari") {
	$t = "Kota Kinabalu | Kayak & Snorkel Safari";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-diving-and-snorkeling") {
	$t = "Kota Kinabalu | Diving & Snorkeling";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-white-water-rafting") {
	$t = "Kota Kinabalu | White Water Rafting";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-cycling-programs") {
	$t = "Kota Kinabalu | Cycling Programs";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-easy-breezy-ride") {
	$t = "Kota Kinabalu | Easy Breezy Ride";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-kiulu-fun-and-green") {
	$t = "Kota Kinabalu | Kiulu Fun & Green";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-highland-cool-and-chill") {
	$t = "Kota Kinabalu | Highland Cool & Chill";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-momma-house-cooking-class") {
	$t = "Kota Kinabalu | Momma's House Cooking Class";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-borneo-orchard-house") {
	$t = "Kota Kinabalu | Borneo Orchard House";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "kota-kinabalu-accommodation") {
	$t = "Kota Kinabalu | Accommodations";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

//rest

if($p[1] == "maliau-basin") {
	$t = "Maliau Basin Expedition, Borneo Nature Tour Adventure";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "tabin-wildlife-reserve") {
	$t = "Tabin Wildlife Adventure, Resort and Borneo Itinerary";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover mud volcano and the rich variety of jungle herbs, birds, plants, animals. Meaningful Adventures!";	
}

if($p[1] == "orou-sapulot") {
	$t = "Orou Sapulot, Borneo Tours & Borneo Holiday";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Encounter Murut hospitality, drink bottomless rice wine and chat about their headhunting ancestors.";	
}

//


if($p[1] == "custom-trips") {
	$t = "Meaningful Custom Trips with Sticky Rice Travel Agency";
	$d = "Book amazing borneo holidays with Sticky Rice. Plan a trip or even a group trip. No worries on question like help me plan a trip. Meaningful Adventures!";	
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
	$t = "Booking | Make a booking with Sticky Rice Travel Agency";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Get a meaningful adventures when you make booking for your trip to Borneo. Make a booking today!";	
}

if($p[1] == "terms") {
	$t = "Sticky Rice Travel's Booking Terms and Conditions";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Read cancellation policy, terms and conditions, deposit refundable and more. Make a booking today!";	
}

if($p[1] == "customer-reviews") {
	$t = "Customer Reviews | Read about Sticky Rice travel reviews, holiday reviews";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Read what our customer have to say about us. Let them convince you choose us. Make a booking today!";	
}

if($p[1] == "privacy-policy") {
	$t = "Privacy Policy | What we collect from our site visitors";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Privacy Policy, read what information we collect from our site visitors. Meaningful Adventures!";	
}

if($p[1] == "our-friends") {
	$t = "Friends of Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Take a look at some of our friends, it is worth it. Let them be part of your trip in Borneo too.";	
}

if($p[1] == "404") {
	$t = "Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Take a look at some of our friends, it is worth it. Let them be part of your trip in Borneo too.";	
}


function curPageURL() {return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";}

ob_start("sanitize_output");
include './header.php';

	if(isset($p[4]) && $p[4] != ""){
		if(in_array($p[4], ${str_replace("-", "_",$p[3])})){
			include "./a/".$p[2]."-".$p[3]."-".$p[4].".php";
		}
	}	
	else if(isset($p[3]) && $p[3] != ""){
		if(in_array($p[3], ${str_replace("-", "_",$p[2])})){
			include "./a/".$p[2]."-".$p[3].".php";
		}
	}	
	else if(isset($p[2]) && $p[2] != ""){
		if(in_array($p[2], $our_adventures)){
			include "./a/".$p[2].".php";
		}
		else{
			// not found page
			include "./a/base.php";
			?>
			<script>
			    console.log(<?php echo json_encode("Not found page"); ?>);
			</script>
			<?php
		}
	}
	else if(isset($p[1])){
		if(($p[1] == "home" || $p[1] == "")){
			include "./a/base.php";
		}
		else if(in_array($p[1], $lvlone)){
			include "./a/".$p[1].".php";
		}
	}

	// if(!isset($p[2])) {$p[2] = "";}

	// if (in_array($p[2],$c)) {
	// 	header("Location: http://www.stickyricetravel.com/".$p[2]);
	
	// } else if (in_array($p[1],$c)) {
	// 	include "./a/".$p[1].".php";	
		
	// } else if ($p[1] == "showmethemoney") {
	// 	include "./a/base.php";
	// 	foreach($c as $value) {
	// 		if (!in_array($value,$ignore)) {
	// 			include "./a/".$value.".php";
	// 		}
	// 	}	
	// } else {
	// 	include "./a/base.php";
	// }

include './footer.php';
?>