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

function listCategory(arrCategory){
	var i = arrCategory.length;
	var res = ""; 

	while(i--){
		res = res + arrCategory[i] + ", ";
	}
	return ("<h6>" + res + "</h6>");
}

function isCategoryFound(compareWith, product){
	var i = product.category.length;
	while(i--){
		if(product.category[i] == compareWith){
			return true;
		}
	}
}

function printProduct(product){
	str_img = '<img src="' + product.image + '" class="img1" alt="' + product.title + '"/>';
	str_title = '<h2>' + product.title + '</h2>';
	str_details = '<div class="rating accommodation"><h3>Lodging</h3>' + rate('accommodation', product) + '</div><div class="rating difficulty"><h3>Difficulty</h3>' + rate('difficulty', product) + '</div><div class="clear"></div><div class="category"><h3>Category</h3>' + listCategory(product.category) + '</div>';
	res = '<div class="six columns product_box"><div class="img_boxing"><a href="' + product.url + '">' + str_img + str_title + str_details + '</a></div></div>';
	return res;
}

function getDetailsBasedOnCategory(category){	
	var res = "", counter = 0;
	$.when(getJson()).done(function(data){
		for (var i in data.parent_product){
			for (var j in data.parent_product[i].child){
				if(isCategoryFound(category, data.parent_product[i].child[j])){
					$(".category-listing").append(printProduct(data.parent_product[i].child[j]));
					counter++;
				}
			}
		}

		$('.lh .one.columns.white-space-listing').css({"height": counter/3*$('.category-listing .six.columns').height()});
	});
}

function getDetails(compareWith, compareWithChild){
	$.when(getJson()).done(function(data){
		var i = 0, arr, counter = 0;
		loop1: 
		for (i in data.parent_product){
			if(data.parent_product[i].title == compareWith && compareWithChild == ""){
				arr = data.parent_product[i].child;
				break loop1;
			}
			else if(data.parent_product[i].title == compareWith){
				loop2:
				for (var l in data.parent_product[i].child){
					if(data.parent_product[i].child[l].title == compareWithChild){
						arr = data.parent_product[i].child[l].child;
						break loop1;
					}				
				}				
			}
		}

		for (var j in arr){
			$(".product-listing").append(printProduct(arr[j]));
			counter++;
		}

		$('.lh .one.columns.white-space-listing').css({"height": counter/3*$('.product-listing .six.columns').height()});
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
					temp = temp + '<li><a>' + data.parent_product[i].child[j].category[pd] + "</a></li>";
				}
				$('.product_side ul.category').append(temp);
				$('.product_side ul.difficulty li a').append(rate('difficulty', data.parent_product[i].child[j]));
				$('.product_side ul.accommodation li a').append(rate('accommodation', data.parent_product[i].child[j]));
				break;
			}
		}
	});
}