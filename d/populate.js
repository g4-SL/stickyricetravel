var MAX_RATING = 5;

function getJson(){	
	return $.ajax({
		dataType: "json",
		url: "../f/product_summary.json",
		success: function(data){
			return;
		}
	});
}

function rate(val, data){
	var temp = "";
	var k;
	var lim_rating = Math.min(data[val], MAX_RATING);
	if(data[val] == 0){
		return '<h6>N/A</h6>';
	}
	for(k = 1; k <= lim_rating; k++){
		temp = temp + '<img src="../c/' + val + '.png">';
	}
	while(k <= MAX_RATING){
		temp = temp + '<img src="../c/' + val + '_fade.png">';
		k++;
	}
	return temp;
}

function getDetails(product_parent){
	$.when(getJson()).done(function(data){
		var i = 0;
		for (i in data.parent_product){
			if(data.parent_product[i].title == product_parent){
				break;
			}
		}

		$('.product_box').each(function(){
			for(var j in data.parent_product[i].child){
				if(data.parent_product[i].child[j].title == $(this).find('h2').text()){			
					var temp = "";
					for(var pd in data.parent_product[i].child[j].category){
						temp = temp + data.parent_product[i].child[j].category[pd] + ", ";
					}
					$(this).find('.category h3').after("<h6>" + temp + "</h6>");
					$(this).find('.rating.accommodation h3').after(rate('accommodation', data.parent_product[i].child[j]));
					$(this).find('.rating.difficulty h3').after(rate('difficulty', data.parent_product[i].child[j]));
				}
			}
		});
	});
}

function populateSidebar(product_parent, product_child){
	$.when(getJson()).done(function(data){
		var i = 0;
		for (i in data.parent_product){
			if(data.parent_product[i].title == product_parent){
				break;
			}
		}

		for (var j in data.parent_product[i].child){
			if(data.parent_product[i].child[j].title == product_child){
				var temp = "";
				for(var pd in data.parent_product[i].child[j].category){
					temp = temp + '<li><a>' + data.parent_product[i].child[j].category[pd] + "</li></a>";
				}
				$('.product_side ul.category').append(temp);
				$('.product_side ul.difficulty li a').append(rate('difficulty', data.parent_product[i].child[j]));
				$('.product_side ul.accommodation li a').append(rate('accommodation', data.parent_product[i].child[j]));
				break;
			}
		}
	});
}