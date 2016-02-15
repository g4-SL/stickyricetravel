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

			<div class="twelve columns sitemap-col" style="padding-top:0">
				<h3>Sabah</h3>
				<ul class="sitemap_list" id="sabah_list">
				</ul>
			</div>

			<div class="six columns sitemap-col" style="padding-top:0">
				<h3>Sarawak</h3>
				<ul class="sitemap_list" id="sarawak_list">
				</ul>
				<h3>Multi Trips Package</h3>
				<ul class="sitemap_list" id="multi_list">
				</ul>
				<h3>Custom Trips</h3>
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
		url: "../f/product_summary.json",
		success: function(data){
		}
	});
}

function getList(data){
	var res = "", url = ""; 
	if(data.hasOwnProperty('url') && data.url != ""){ url = '<a href="' + data.url + '">'; }
	res = '<li>' + url + data.title + "</a></li>";
	if(data.hasOwnProperty('child')){
		res = res + '<ul>';
		for(var l in data.child){
			res = res + getList(data.child[l]);			
		}
		res = res + '</ul>';
	}
	return res;
}

$(document).ready(function() {
	var temp = "<ul>"; 
    $.when(getUrlJson()).done(function(data){
    	var i = 0, j = 0, OUR_ADVENTURES;
    	for(i in data.url_group){
    		if(data.url_group[i].title == "Our Adventures"){
    			OUR_ADVENTURES = i;
    		} else{
    			temp = temp + getList(data.url_group[i]);
    		}
    	}
		$('#main_list').append(temp + '</ul>');

		for(var j in data.url_group[i].child){
			if(data.url_group[i].child[j].type == "Sabah"){
				$('#sabah_list').append('<ul>' + getList(data.url_group[i].child[j]) + '</ul>');
			}
			else if(data.url_group[i].child[j].type == "Sarawak"){
				$('#sarawak_list').append('<ul>' + getList(data.url_group[i].child[j]) + '</ul>');
			}
			else if(data.url_group[i].child[j].type == "Multi"){
				$('#multi_list').append('<ul>' + getList(data.url_group[i].child[j]) + '</ul>');
			}
			else if(data.url_group[i].child[j].type == "Others"){
				$('#others_list').append('<ul>' + getList(data.url_group[i].child[j]) + '</ul>');
			}
		}
    });
});

</script>
