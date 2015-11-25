<?php
//remember to prevent injection


if(!isset($_POST['f_model'])) {
	die('Unable to proceed!');
} else {
	$fil = $_POST['f_model'];
	$fil = str_replace("-group","",$fil);
	//echo $fil;
	//exit();
}


/*
$wyecursive = true;
define('SIDE_CHARS', 111);
$file_count = 0;
$search_term = mb_strtolower($_POST['f_Sandakan'], 'UTF-8');

$file = "../a/".$search_term.".php";

$contents = file_get_contents($file);

preg_match("#\<tt.*\>(.*)\<\/tt\>#si", $contents, $page_title); //getting page title


if (preg_match("#\<samp.*\>(.*)\<\/samp\>#si", $contents, $body_content)){
	$clean_content = $body_content[0];
	//$clean_content = preg_replace( '/\f+/', ' ', $clean_content ); 
}

echo "<tt>".$page_title[0]."</tt>";
echo $clean_content;
*/
?>

<?php



//define('SIDE_CHARS', 111);

	/* xml loading */
	$xml = false;

			$wy = 0;
			$wr = 0;
			$tss = "";
			$trv = "";
			$grv = "";
			$title = "";
			$img = "";
			$desc = "";
			$o = "";
	

	if (file_exists('../our-adventures.xml')) {
		if (!$xml = @simplexml_load_file('../our-adventures.xml')) {
			echo "error";
		}
		else {


		
			foreach ($xml->Model as $Model)
			{
				
				
				
				
				
				if($wr == 0 ) {

					$grp = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->grp)) : '');
					if($grp == $fil) {
				
					$trv = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->trv)) : '');
					$grv = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->grv)) : '');
				
					echo '<tt><div id="sly" class="ei-slider"><ul class="ei-slider-large"><li><img src="c/large/'.$grv.'" alt=""/></li></ul></div></tt>';
					$wr++;
					
					}
				} else {
				
					$grp = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->grp)) : '');
					if($grp == $fil) {
				
					
					$title = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->ftitle)) : 'k');
					$img = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->fimg)) : '');
					$desc = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->desc)) : 'k');
					$o = ($xml ? stripslashes(htmlspecialchars($xml->Model[$wy]->o)) : 'k');

					
					echo '<div class="eight columns lq">
								<h2><a href="./'.$o.'">'.$title.'</a></h2>
								<img src="c/adventures/'.$img.'" class="lar" alt="" />
								<div class="pp">
									<p class="kan">'.$desc.'</p>
									<div class="v"><a href="./'.$o.'"><img src="c/view.png"></a></div>
									<div class="clear"></div>
								</div>	
							</div>';

					}
				}
				
				
				$wy++;
				
				
			}
			
			echo "";
			
		}
	}
?>