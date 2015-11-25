var product_arr;
var MAX_RATING = 3;

function getJson(){	
	return $.ajax({
		dataType: "json",
		url: "../f/product_summary.json",
		success: function(data){
			return;
		}
	});
}

function rate(val, j){
	var temp = "";
	var k;
	for(k = 1; k <= product_arr[j][val]; k++){
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
		for (var i in data.parent_product){
			if(data.parent_product[i].title == product_parent){
				product_arr = data.parent_product[i].child;
			}
		}

		$('.product_box').each(function(){
			for(var j in product_arr){
				if(product_arr[j].title == $(this).find('h2').text()){			
					var temp = "";
					for(var pd in product_arr[j].category){
						temp = temp + product_arr[j].category[pd] + ", ";
					}
					$(this).find('.category h3').after("<h6>" + temp + "</h6>");
					$(this).find('.rating.accommodation h3').after(rate('accommodation', j));
					$(this).find('.rating.difficulty h3').after(rate('difficulty', j));
				}
			}
		});
	});
}