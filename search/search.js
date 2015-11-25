$(function(){
	var f=location.search.replace(/^\?.*f=([^&]+)/,'$1')
		,form=$('#search')
		,input=$('input[type=text]',form)
		,results=$('#search-results').height(0)
		,src='search/results.php'
		,ifr=$('<iframe width="100%" height="110%" frameborder="0" marginheight="0" marginwidth="0" allowTransparency="true"></iframe>')
	
	if(results.length)		
		ifr		
			.attr({
				src:src+'?f='+f
			})
			.appendTo(results)
		,input
			.val(decodeURI(f))
	
	window._resize=function(h){		
		results
			.height(h)
	}
})