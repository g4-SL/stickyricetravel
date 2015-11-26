<div class="product_side">
	<div class="left">
		<h3>Accommodation</h3>
		<ul class="accommodation">
			<li><a></a></li>
		</ul>
		<h3>Difficulty</h3>
		<ul class="difficulty">
			<li><a></a></li>
		</ul>
	</div>
	<div class="right">
		<h3>Category</h3>
		<ul class="category">
		</ul>
	</div>
	<div class="clear"></div>
</div>

<style>
.product_side h3{text-transform: uppercase;padding-bottom: 10px;margin: 0;line-height: 1}
.product_side li:hover{cursor: pointer;}
.product_side a{text-decoration: none;}
.product_side li{margin-bottom: 10px;}
.product_side ul{list-style-type: none;margin: 0;}
.product_side img{width:auto;}

@media (min-width:768px){
	.product_side h3{font-size: 1em;}
	.product_side a{font-size: 0.9em;}
}

/*xx-large screen*/
@media (min-width:1200px){
	.product_side{background: url(../c/paper-bg.png) no-repeat;padding: 70px 15px 15px;height: 370px;text-align: right;}
	.large_screen_merge .clear{display:none;}
}

/*large and x-large screen*/
@media (min-width:768px) and (max-width:1199px){
	.large_screen_merge{float:left;}
	.large_screen_merge .book_now{float:right;}
	.large_screen_merge .clear{display:block;}
}

/*small, medium, large, x-large screen*/
@media (max-width:1199px){
	.product_side{background: url(../c/paper-bg-v3.png) no-repeat bottom center;}
	.product_side h3{font-size: 0.9em;}
	.product_side a{font-size: 0.8em;}
	.product_side .left{float: left;width: 65%;}
	.product_side .right{float: right;width: 35%;}
}

/*x-large screen*/
@media (min-width:960px) and (max-width:1199px){
	.product_side{padding: 15px 120px;}
	.large_screen_merge{width: 540px;}
	.large_screen_merge .four.columns{width: 520px;}
}

/*large screen*/
@media (min-width:768px) and (max-width:959px){
	.product_side{padding: 15px 70px;-size: 100%;}
	.large_screen_merge{width: 432px;}
	.large_screen_merge .four.columns{width: 412px;}
}

/*medium screen*/
@media (min-width:480px) and (max-width:767px){
	.product_side{padding: 15px 80px 15px 60px;}
}

/*small screen*/
@media (max-width:479px){
	.product_side{padding: 15px;}
}
</style>