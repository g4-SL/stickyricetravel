	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="c/large/www-about-us.jpg" alt="Mountain View"/>
				<div class="ei-title"></div>
			</li>
		</ul>
	</div>

	<nav></nav><section>	
		<div class="container">

			<div class="one columns"></div>

			<div class="eighteen columns">
				<h1>Sitemap</h1>
				<div class="short_line"></div>
				<ul class="sitemap_list" id="main_list">
				</ul>
			</div>

			<div class="clear"></div>

			<div class="one columns"></div>

			<div class="twelve columns">
				<ul class="sitemap_list" id="sabah_list">
				</ul>
			</div>

			<div class="six columns">
				<ul class="sitemap_list" id="others_list">
				</ul>
			</div>

			<div class="clear"></div>

		</div>
	</section>

<script language="javascript" type="text/javascript" src="d/jquery.ms.js"></script>
<script type="text/javascript">

function getUrlJson(){	
	return $.ajax({
		dataType: "json",
		url: "../f/url.json",
		success: function(data){
		}
	});
}

function getList(data){
	var res = ""; 
	if(data.hasOwnProperty('child')){
		res = '<ul>';
		for(var l in data.child){
			res = res + "<li><a>" + data.child[l].title + "</li></a>" + getList(data.child[l]);
		}
		res = res + "</ul>";
	}
	return res;
}

$(document).ready(function() {
	var temp = ""; 
    $.when(getUrlJson()).done(function(data){
    	var i = 0, j = 1;
    	for(i in data.url_group){
    		temp = temp + "<li><a>" + data.url_group[i].title + "</li></a>";
    	}
		$('#main_list').append(temp);

		temp = "";
		temp = data.url_group[i].child[0].title + getList(data.url_group[i].child[0]);
		$('#sabah_list').append(temp);

		temp = "";
		for(j = 1; j < Object.keys(data.url_group[i].child).length; j++){
			temp = temp + data.url_group[i].child[j].title + getList(data.url_group[i].child[j]);
		}
		$('#others_list').append(temp);
    });
});

</script>
