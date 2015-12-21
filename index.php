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

if($p[1] == "our-adventures" && $p[2] == "danum-valley") {
	$t = "Borneo Adventure Tourism, Danum Valley, Sabah Packages";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Now is the best time to visit Borneo, especially Danum Valley in Malaysia. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "borneo-rainforest-lodge") {
	$t = "Danum Valley | Borneo Rainforest Lodge";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Stay in a 5 star lodge and experience wilderness and nature in Danum Valley. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center") {
	$t = "Danum Valley Accommodation, Field Center, Sabah Travel";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "purut-camping") {
	$t = "Danum Valley | Sungai Purut Camping";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "expedition") {
	$t = "Danum Valley | Expedition to Mt. Danum";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "jungle-to-luxury") {
	$t = "Danum Valley | Wild Jungles to Luxury";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "explorer") {
	$t = "Danum Valley | DVFC Explorer";
	$d = "Book amazing borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

//KINABATANGAN

if($p[1] == "our-adventures" && $p[2] == "kinabatangan") {
	$t = "Things to do in Borneo, Travel and Visit Kinabatangan";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Experience Kinabatangan River Cruise, accommodation, homestay and tours. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "abai-homestay") {
	$t = "Kinabatangan | Abai Homestay Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice. We encourage tourists to consider home stay arrangements while visiting Borneo. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "ecocamp") {
	$t = "Kinabatangan | Eco Camp, Borneo Eco Tour Adventures";
	$d = "Book amazing borneo holidays with Sticky Rice. Stay at the only accommodation on Kinabatangan that is located in a forest reserve. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "supu-camp") {
	$t = "Kinabatangan | Supu Camp, River Cruise in Sabah Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice. Borneo River Cruise, forest trekking, spot wildlife, explore limestone caves & more. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "kinabatangan-wetlands-resort") {
	$t = "Kinabatangan | Kinabatangan Wetlands Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. Supu Camp, Homestay, River Cruise, spot wildlife, explore limestone caves and more. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "borneo-nature-lodge") {
	$t = "Kinabatangan | Borneo Nature Lodge";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

// SANDAKAN AND SEPILOK

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok") {
	$t = "Sandakan & Sepilok";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "sepilok-sojourn") {
	$t = "Sandakan & Sepilok | Sepilok Sojourn";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "libaran-turtle-island-camping") {
	$t = "Sandakan & Sepilok | Libaran Turtle Island Camping";
	$d = "Book amazing borneo holidays with Sticky Rice. It's not camping, its glamping! Visit turtle island borneo, Libaran, Sabah Island. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "orang-utan-and-turtles") {
	$t = "Sandakan & Sepilok | Orang Utans & Turtles";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "lankayan-island") {
	$t = "Sandakan & Sepilok | Lankayan Island";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "sepilok-nature-resort") {
	$t = "Sepilok | Sepilok Nature Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "sepilok-forest-edge") {
	$t = "Sepilok | Sepilok Forest Edge";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "paganakan-dii-tropical-retreat") {
	$t = "Sepilok | Paganakan Dii Tropical Retreat";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "sheraton-four-points") {
	$t = "Sandakan | Sheraton Four Points";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "sandakan-and-sepilok" && $p[3] == "nak-hotel") {
	$t = "Sandakan | Nak Hotel";
	$d = "Book amazing borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}

// CROCKER RANGE PARK

if($p[1] == "our-adventures" && $p[2] == "crocker-range-park") {
	$t = "Crocker Range Park, Borneo Adventure";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous 2 day trek in Crocker Range. Enjoy beautiful views, plants and birds. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "crocker-range-park" && $p[3] == "gunung-alab-hike") {
	$t = "Crocker Range Park | Gunung Alab Hike";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous 2 day trek in Crocker Range. Enjoy beautiful views, plants and birds. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "crocker-range-park" && $p[3] == "mt-trus-madi") {
	$t = "Crocker Range Park | Mt Trus Madi Trek";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "crocker-range-park" && $p[3] == "day-trip") {
	$t = "Crocker Range Park | Crocker Range Park";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "crocker-range-park" && $p[3] == "sinurambi-bed-and-breakfast") {
	$t = "Crocker Range Park | Sinurambi Bed & Breakfast";
	$d = "Book amazing borneo holidays with Sticky Rice. Adventurous trekking in the Crocker National Park. Enjoy beautiful views and more. Meaningful Adventures!";
}

// SEMPORNA ARCHIPELAGO

if($p[1] == "our-adventures" && $p[2] == "semporna-archipelago") {
	$t = "Semporna Archipelago, Best Diving Borneo Holidays";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Stay in dive resort or oilrig for diving in Mabul, Kapalai, Sipadan and more. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "semporna-archipelago" && $p[3] == "seaventures-dive-rig") {
	$t = "Semporna Archipelago | Seaventures Dive Rig, Best Diving Packages in Sabah";
	$d = "Book amazing borneo holidays with Sticky Rice. Best Diving packages and diving Resort in Malaysia. Dive Mabul, Kapalai and Sipadan. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "semporna-archipelago" && $p[3] == "mataking-resort") {
	$t = "Semporna Archipelago | Mataking Resort, Malaysian Resorts, island and beaches";
	$d = "Book amazing borneo holidays with Sticky Rice. Great staff, beautiful villas, mesmerizing aquamarine and white powder sand beaches. Meaningful Adventures";	
}

// KINABALU NATIONAL PARK

if($p[1] == "our-adventures" && $p[2] == "kinabalu-national-park") {
	$t = "Kinabalu National Park";
	$d = "Book amazing borneo holidays with Sticky Rice. Great staff, beautiful villas, mesmerizing aquamarine and white powder sand beaches. Meaningful Adventures";	
}

if($p[1] == "our-adventures" && $p[2] == "kinabalu-national-park" && $p[3] == "camping") {
	$t = "Kinabalu National Park | Mt Kinabalu Camping, Amazing Borneo Tours";
	$d = "Book amazing borneo holidays with Sticky Rice. Trekking, swim in waterfall, search for reptiles, amphibians, flora, fauna and more. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "kinabalu-national-park" && $p[3] == "mountain-torq-ferrata") {
	$t = "Kinabalu National Park | Mountain Torq via Ferrata, Mount Kinabalu Package";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Mount Kinabalu, Mountain Torq via Ferrata Itinerary all inclusive package. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kinabalu-national-park" && $p[3] == "mount-kinabalu-climb") {
	$t = "Kinabalu National Park | Mt Kinabalu Package, Mount Kinabalu Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kinabalu-national-park" && $p[3] == "day-trip") {
	$t = "Kinabalu National Park | Day Trip";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

// KOTA BELUD

if($p[1] == "our-adventures" && $p[2] == "kota-belud") {
	$t = "Kota Belud";
	$d = "Book amazing borneo holidays with Sticky Rice. Mt Kinabalu Climbing Itinerary with transport from kota kinabalu to kinabalu park. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-belud" && $p[3] == "kampung-tambatuon") {
	$t = "Kota Belud | Tambatuon Village, Sabah Holiday Package and Tourism";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-belud" && $p[3] == "manana-borneo") {
	$t = "Kota Belud | Manana Borneo, Sabah Holiday Package and Tourism";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

// KUDAT

if($p[1] == "our-adventures" && $p[2] == "kudat") {
	$t = "Kudat";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kudat" && $p[3] == "northern-island-exploration") {
	$t = "Kudat | Northern Island Exploration";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kudat" && $p[3] == "hibiscus-villa") {
	$t = "Kudat | Hibiscus Villa";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kudat" && $p[3] == "hibiscus-beach-retreat") {
	$t = "Kudat | Hibiscus Beach Retreat";
	$d = "Book amazing borneo holidays with Sticky Rice. Different side of Borneo, 5 days of exploring untouched culture & pristine islands. Meaningful Adventures!";	
}

// KOTA KINABALU

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu") {
	$t = "Kota Kinabalu";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "kayak-and-snorkel-safari") {
	$t = "Kota Kinabalu | Kayak & Snorkel Safari";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "diving-and-snorkeling") {
	$t = "Kota Kinabalu | Diving & Snorkeling";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "white-water-rafting") {
	$t = "Kota Kinabalu | White Water Rafting";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "cycling-programs") {
	$t = "Kota Kinabalu | Cycling Programs";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "cycling-programs" && $p[4] == "easy-breezy-ride") {
	$t = "Kota Kinabalu | Easy Breezy Ride";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "cycling-programs" && $p[4] == "kiulu-fun-and-green") {
	$t = "Kota Kinabalu | Kiulu Fun & Green";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "cycling-programs" && $p[4] == "highland-cool-and-chill") {
	$t = "Kota Kinabalu | Highland Cool & Chill";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "momma-house-cooking-class") {
	$t = "Kota Kinabalu | Momma's House Cooking Class";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation") {
	$t = "Kota Kinabalu | Accommodations";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "borneo-backpackers") {
	$t = "Kota Kinabalu | Borneo Backpackers";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "gaya-island-resort") {
	$t = "Kota Kinabalu | Gaya Island Resort";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "grandis-hotel") {
	$t = "Kota Kinabalu | Grandis Hotel";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "hotel-sixty3") {
	$t = "Kota Kinabalu | Hotel Sixty3";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "hyatt-regency") {
	$t = "Kota Kinabalu | Hyatt Regency";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "jesselton-hotel") {
	$t = "Kota Kinabalu | Jesselton Hotel";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "kota-kinabalu" && $p[3] == "accommodation" && $p[4] == "kk-suites") {
	$t = "Kota Kinabalu | KK Suites";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover Dusun Tribe & longhouse accommodation by the banks of the Kedamaian River. Meaningful Adventures!";	
}

//rest

if($p[1] == "our-adventures" && $p[2] == "maliau-basin") {
	$t = "Maliau Basin Expedition, Borneo Nature Tour Adventure";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "tabin-wildlife-reserve") {
	$t = "Tabin Wildlife Adventure, Resort and Borneo Itinerary";
	$d = "Book amazing borneo holidays with Sticky Rice. Discover mud volcano and the rich variety of jungle herbs, birds, plants, animals. Meaningful Adventures!";	
}

if($p[1] == "our-adventures" && $p[2] == "orou-sapulot") {
	$t = "Orou Sapulot, Borneo Tours & Borneo Holiday";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Encounter Murut hospitality, drink bottomless rice wine and chat about their headhunting ancestors.";	
}

// ULU AI EXPERIENCES

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences") {
	$t = "Ulu Ai Experiences";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences" && $p[3] == "nanga-sumpa") {
	$t = "Ulu Ai Experiences | Nanga Sumpa";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences" && $p[3] == "nanga-sumpa-and-lubok-kasai") {
	$t = "Ulu Ai Experiences | Nanga Sumpa & Lubok Kasai";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences" && $p[3] == "lubok-kasai-jungle-experience") {
	$t = "Ulu Ai Experiences | Lubok Kasai Jungle Experience";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences" && $p[3] == "longhouse-to-longhouse-trek") {
	$t = "Ulu Ai Experiences | Longhouse to Longhouse Trek";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "ulu-ai-experiences" && $p[3] == "red-ape-trail") {
	$t = "Ulu Ai Experiences | Red Ape Trail";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

// BAKO NATIONAL PARK

if($p[1] == "our-adventures" && $p[2] == "bako-national-park") {
	$t = "Bako National Park";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "bako-national-park" && $p[3] == "day-trip") {
	$t = "Bako National Park | Day Trip";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "bako-national-park" && $p[3] == "two-days-trip") {
	$t = "Bako National Park | 2D1N at Bako National Park";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

// KUCHING

if($p[1] == "our-adventures" && $p[2] == "kuching") {
	$t = "Kuching";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "kuching" && $p[3] == "big-stream-cool-spaces") {
	$t = "Kuching | Big Stream, Cool Spaces";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "kuching" && $p[3] == "rainforest-kayaking-and-bamboo-rafting") {
	$t = "Kuching | Rainforest Kayaking & Bamboo Rafting";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "kuching" && $p[3] == "ranee-kuching") {
	$t = "Kuching | Ranee Kuching";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "kuching" && $p[3] == "santubong-wildlife-cruise") {
	$t = "Kuching | Santubong Wildlife Cruise";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "kuching" && $p[3] == "tringgus-trail") {
	$t = "Kuching | Tringgus Trail";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

// MULU NATIONAL PARK

if($p[1] == "our-adventures" && $p[2] == "mulu-national-park") {
	$t = "Mulu National Park";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "mulu-national-park" && $p[3] == "headhunters-trail") {
	$t = "Mulu National Park | Headhunters' Trail";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "mulu-national-park" && $p[3] == "mulu-showcaves-and-pinnacles") {
	$t = "Mulu National Park | Mulu Showcaves & Pinnacles";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "mulu-national-park" && $p[3] == "mulu-showcaves") {
	$t = "Mulu National Park | Mulu Showcaves";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

// MULTI TRIPS

if($p[1] == "our-adventures" && $p[2] == "6d5n-eastern-wildlife-tour") {
	$t = "6D5N Eastern Wildlife Tour | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "7d6n-eastern-wildlife-tour") {
	$t = "7D6N Eastern Wildlife Tour | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "9d8n-eastern-wildlife-tour") {
	$t = "9D8N Eastern Wildlife Tour | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "8d7n-sabah-hidden-treasure") {
	$t = "8D7N Sabah's Hidden Treasures | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "7d6n-sabah-hidden-treasure") {
	$t = "7D6N Sabah's Hidden Treasures | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "8d7n-hike-and-climb") {
	$t = "8D7N Hike & Climb | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
}

if($p[1] == "our-adventures" && $p[2] == "mountain-to-sea") {
	$t = "5D4N Mountain to Sea | Multi Trip Packages";
	$d = "Book amazing borneo holidays with Sticky Rice. A trip to Maliau Basin is truly adventurous. With over 2000 plants and animals. Meaningful Adventures!";			
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

if($p[1] == "404") {
	$t = "Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Take a look at some of our friends, it is worth it. Let them be part of your trip in Borneo too.";	
}


$recursive = true;
$search_in = array('html', 'htm', 'php');
function curPageURL() {return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";}
function list_files($dir){
	global $recursive, $search_in;

	$result = array();
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false) {
				if(!($file == '.' || $file == '..')){
					$file = $dir.'/'.$file;
					if(is_dir($file) && $recursive == true && $file != './.' && $file != './..'){
						$result = array_merge($result, list_files($file));
					}
					else if(!is_dir($file)){
						if(in_array(get_file_extension($file), $search_in)){
							$result[] = $file;
						}
					}
				}
			}
		}
	}
	return $result;
}

function get_file_extension($filename){
	$result = '';
	$parts = explode('.', $filename);
	if(is_array($parts) && count($parts) > 1){
		$result = end($parts);
	}
	return $result;
}

ob_start("sanitize_output");
include './header.php';

	$files = list_files('a');
	$tempUrl = "";
	$notfound = true;
	if(isset($p[1])){
		if($p[1] == "home" || $p[1] == ""){$tempUrl = "a/base";}
		else{$tempUrl = "a/".$p[1];}
	}
	if(isset($p[2]) && $p[2] != ""){$tempUrl = $tempUrl."/".$p[2];}
	if(isset($p[3]) && $p[3] != ""){$tempUrl = $tempUrl."/".$p[3];}
	if(isset($p[4]) && $p[4] != ""){$tempUrl = $tempUrl."/".$p[4];}
	$tempUrl = $tempUrl.".php";

	foreach($files as $file){
		if($tempUrl == $file){
			include $tempUrl;
			$notfound = false;
		}
	}

	if($notfound == true){
		include "./a/404.php";
		http_response_code(404);
	}

include './footer.php';
?>