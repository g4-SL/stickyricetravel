	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li><img src="<?php echo $uf; ?>c/large/www-adventures-tunku-abdul-rahman-park-under-water.jpg" alt="Tunku Abdul Rahman Park under water"/><div class="ei-title"></div></li>
		</ul>
	</div>
	
	<nav></nav><section>
		<div class="container cont nd hd lh">
		
			<div class="eleven columns">
				<h1>Our Adventures</h1>
			</div>			

			<div class="five columns">
				<ul class="brc">
					<li><a href="<?php echo $uf;?>home">Home</a></li>
					<li>Our Adventures</li>
				</ul>
			</div>
			
			<div class="sixteen columns ic" style="line-height:20px">
			
			</div>
			
			<div class="clear"></div>
			<script type="text/javascript" src="<?php echo $uf; ?>d/oa.js"></script>
			
			<div class="five columns">
				<form style="font-size:0.8em;line-height:30px">
				Destination: 
				<select name="f_make" id="f_make" onchange="clean_ell();once = 0;$('#func2').val('');P_model(pm);" style="height:35px;font-size:15px;width:100%">
					<option value="">All</option>
					<option value="Sabah">Sabah</option>
					<option value="Sarawak">Sarawak</option>
				</select>
				</form>
			</div>

			<div class="six columns">				
				<form method="post" id="frm_model" style="font-size:0.8em;line-height:30px">
					Classification: 
					<select name="f_model" id="f_model" onchange="once = 0;P_adventures('',this.value);$('#k1').val(this.value);" style="height:35px;font-size:15px;width:100%">
						<option value="">All</option>
					</select>
					<input type="hidden" name="func2" id="func2">
					<input type="hidden" name="k1" id="k1">
				</form>
			</div>
			<div class="five columns">	
				<form style="font-size:0.8em;line-height:30px">
					<input type="hidden" name="func3" id="func3">
					Browse by: 
					<select name="f_browse" id="f_browse" onchange="once = 0;P_adventures(pm,this.value);" style="height:35px;font-size:15px;width:100%" disabled >
						<option value="">All</option>
					</select>
				</form>
			</div>
			
			<div class="clear"></div>

			<noscript>
				<div class="sixteen columns">
					<h2>You need to enable javascript to view this page or use some of the site's functionality.</h2>
					<hr />
					<?php 
					foreach($cg as $value) {
						if (!in_array($value,$ignore)) {
							echo "<p><a href='./".$value."'>http://www.stickyricetravel.com/".$value."</a></p>";
						}
					}
					?>
				</div>
			</noscript>	
			
		</div>		
		
		
		<script>
		function chk_blank() {
			if($('#func3').val() != "") {
				once = 0;
				P_adventures(pm,$('#func3').val());
			} else if($('#func2').val() != "") {
				P_model(pm);
				P_adventures(pm,"");
			}
			if($('#k1').val() != "") {
				var kj = $('#k1').val();
				$('#k1').val("");
				location.href="<?php echo $uf;?>our-adventures/"+kj; 
			}
		}
		</script>
		
	</section>
