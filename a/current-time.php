<div class="clock">
	<div id="Date"></div>
	<ul>
		<li id="hours"> </li>
	    <li id="point">:</li>
	    <li id="min"> </li>
	    <li id="point">:</li>
	    <li id="sec"> </li>
	</ul>
</div>

<style>
@font-face {
    font-family: 'BebasNeueRegular';
    src: url('./font/BebasNeue-webfont.eot');
    src: url('./font/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('./font/BebasNeue-webfont.woff') format('woff'),
         url('./font/BebasNeue-webfont.ttf') format('truetype'),
         url('./font/BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;
}

.clock{text-align: center;color:white;margin-bottom:10px}
.clock ul li{color:white;display: inline;font-size:4.1em;font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;}
.clock ul{margin: 0 auto;padding: 0px;list-style: none;}
#Date{font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;font-size:1.6em;line-height:1;margin-bottom:20px}
#point {position: relative;-moz-animation: mymove 1s ease infinite;-webkit-animation: mymove 1s ease infinite;padding-left: 5px;padding-right: 5px;}
</style>

<script>
function toTimeZone() {
    var format = 'dddd DD MMMM YYYY HH mm ss';
    var res = moment().tz("Asia/Kuala_Lumpur").format(format).split(" ");
    return res;
}

$(document).ready(function() {
	$('#Date').html(toTimeZone()[0] + " " + toTimeZone()[1] + ' ' + toTimeZone()[2] + ' ' + toTimeZone()[3]);

	setInterval( function() {
		$("#sec").html(toTimeZone()[6]);
		$("#min").html(toTimeZone()[5]);
		$("#hours").html(toTimeZone()[4]);
		},1000);
	
}); 
</script>
