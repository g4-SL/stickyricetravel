	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="c/large/www-sitemap.jpg" alt=""/>
				<div class="ei-title"></div>
			</li>
		</ul>
	</div>

	<nav></nav><section>	
		<div class="container sitemap">

			<div class="one columns"></div>

			<div class="eighteen columns">
				<h1>Sitemap</h1>
				<div class="short_line"></div>
				<ul class="sitemap_list" id="main_list">
				</ul>
			</div>

			<div class="clear"></div>

			<div class="one columns"></div>

			<div class="twelve columns" style="padding-top:0">
				<ul class="sitemap_list" id="sabah_list">
				</ul>
			</div>

			<div class="six columns" style="padding-top:0">
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

function getList(data, margin){
	var res = ""; 
	if(data.hasOwnProperty('child')){
		res = '<ul style="margin-left:' + margin + '">';
		for(var l in data.child){
			res = res + '<li><a href="' + data.child[l].url + '">' + data.child[l].title + "</li></a>" + getList(data.child[l]);
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
    		temp = temp + '<li><a href="' + data.url_group[i].url + '">' + data.url_group[i].title + "</li></a>";
    		if(data.url_group[i].title != "Our Adventures"){
    			temp = temp + getList(data.url_group[i], "25px");
    		}
    	}
		$('#main_list').append(temp);

		temp = '<h3>' + data.url_group[i].child[0].title + '</h3>';
		$('#sabah_list').before(temp);
		temp = getList(data.url_group[i].child[0], 0);
		$('#sabah_list').append(temp);

		temp = "";
		for(j = 1; j < Object.keys(data.url_group[i].child).length; j++){
			temp = temp + '<h3>' + data.url_group[i].child[j].title + '</h3>' + getList(data.url_group[i].child[j], 0);
		}
		$('#others_list').append(temp);
    });
});

</script>
