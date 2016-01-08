<ul class="horizontal-align sm-interest">
	<li id="jungle-trekking">
		<a href="/travel-by-interest/jungle-trekking"><img src="../c/travel-by-interest/sm-jungle-trekking.png"></a>
	</li>
	<li id="culture">
		<a href="/travel-by-interest/culture"><img src="../c/travel-by-interest/sm-culture.png"></a>
	</li>
	<li id="river-cruise">
		<a href="/travel-by-interest/river-cruise"><img src="../c/travel-by-interest/sm-river-cruise.png"></a>
	</li>
	<li id="day-trip">
		<a href="/travel-by-interest/day-trip"><img src="../c/travel-by-interest/sm-day-trip.png"></a>
	</li>
	<div class="clear"></div>
	<li id="wildlife">
		<a href="/travel-by-interest/wildlife"><img src="../c/travel-by-interest/sm-wildlife.png"></a>
	</li>
	<li id="water-sports">
		<a href="/travel-by-interest/water-sports"><img src="../c/travel-by-interest/sm-water-sports.png"></a>
	</li>
	<li id="beach">
		<a href="/travel-by-interest/beach"><img src="../c/travel-by-interest/sm-beach.png"></a>
	</li>
	<li id="climbing">
		<a href="/travel-by-interest/climbing"><img src="../c/travel-by-interest/sm-climbing.png"></a>
	</li>
	<div class="clear"></div>
	<li id="cave">
		<a href="/travel-by-interest/cave"><img src="../c/travel-by-interest/sm-cave.png"></a>
	</li>
	<li id="accommodation">
		<a href="/travel-by-interest/accommodation"><img src="../c/travel-by-interest/sm-accommodation.png"></a>
	</li>
</ul>

<script>
switch( <?php echo json_encode($interest_selected); ?> ){
	case "jungle trekking":
		$('li#jungle-trekking').addClass("active");
		$('li#jungle-trekking img').attr("src", "../c/travel-by-interest/jungle-trekking.png");
		break;

	case "culture":
		$('li#culture').addClass("active");
		$('li#culture img').attr("src", "../c/travel-by-interest/culture.png");
		break;

	case "river cruise":
		$('li#river-cruise').addClass("active");
		$('li#river-cruise img').attr("src", "../c/travel-by-interest/river-cruise.png");
		break;

	case "day trip":
		$('li#day-trip').addClass("active");
		$('li#day-trip img').attr("src", "../c/travel-by-interest/day-trip.png");
		break;

	case "wildlife":
		$('li#wildlife').addClass("active");
		$('li#wildlife img').attr("src", "../c/travel-by-interest/wildlife.png");
		break;

	case "water sports":
		$('li#water-sports').addClass("active");
		$('li#water-sports img').attr("src", "../c/travel-by-interest/water-sports.png");
		break;

	case "beach":
		$('li#beach').addClass("active");
		$('li#beach img').attr("src", "../c/travel-by-interest/beach.png");
		break;

	case "climbing":
		$('li#climbing').addClass("active");
		$('li#climbing img').attr("src", "../c/travel-by-interest/climbing.png");
		break;

	case "cave":
		$('li#cave').addClass("active");
		$('li#cave img').attr("src", "../c/travel-by-interest/cave.png");
		break;

	case "accommodation":
		$('li#accommodation').addClass("active");
		$('li#accommodation img').attr("src", "../c/travel-by-interest/accommodation.png");
		break;

	default:
		break;
}
</script>
