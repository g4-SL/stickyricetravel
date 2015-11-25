	<div id="sly" class="ei-slider">
		<ul class="ei-slider-large">
			<li>
				<img src="<?php if(isset($p[2])) { echo "../";} ?>c/large/www-collage-feedback.jpg" alt="Borneo Adventures"/>
			</li>
		</ul>
	</div>
	
	<nav></nav><section>	
			
		<div class="container nd hd lh">

			<div class="seven columns">
				<h1>Unsubscribe</h1>
			</div>			

			<div class="nine columns">
				<ul class="brc">
					<li><a href="./home">Home</a></li>
					<li>Unsubscribe</li>
				</ul>
			</div>
			
			<div class="clear"></div>		
		
<?php


function read_all($se) {
  $flag = "";	
  $file = fopen('./database/hashtag-20150512.txt', 'r');
  
  $se = ((trim($se) == "") ? "--=Do-not-=Disturb--" : $se); 
  
  while (!feof($file)) {
    $line = fgets($file);
	
	if(trim(strpos($line, $se)) <> "") {

		$dr = explode("<|||>",$line);
		$flag = $dr;	

	}

	
  }
  fclose($file);
  return $flag;
}

function chk_all($se) {
  $flag = "";
  $file = fopen('./database/hashtag-20150518-unsubscribed.txt', 'r');
  
  $se = ((trim($se) == "") ? "--=Do-not-=Disturb--" : $se);
  
  while (!feof($file)) {
    $line = fgets($file);
	
	if(trim(strpos($line, $se)) <> "") {
		$flag = "reject";	
	}

  }
  fclose($file);
  return $flag;
}






$chk = "";

$drs = read_all($p[2]);
$txt_email = isset($drs[1]) ? $drs[1] : "" ;

$chk = chk_all($txt_email);



if(($txt_email <> "") && ($chk == "")) {

	$filename = './database/hashtag-20150518-unsubscribed.txt';

	// Let's make sure the file exists and is writable first.
	if (is_writable($filename)) {

		// In our example we're opening $filename in append mode.
		// The file pointer is at the bottom of the file hence
		// that's where $somecontent will go when we fwrite() it.
		if (!$handle = fopen($filename, 'a')) {
			 echo "Cannot open file ($filename)";
			 exit;
		}
		
		$content = $txt_email."\n";
		
		if (fwrite($handle, $content) === FALSE) {
			echo "Cannot write to file ($filename)";
			exit;
		}

		fclose($handle);

	} else {
		
		echo "The file $filename is not writable";
	}
	

?>
		

		

			
			<div class="sixteen columns">
				<p>
					Your email has been unsubscribed.
					You will not be hearing from us again. 
				</p>
				<p>
					If this is a mistake and you want to hear from us again, please email info@stickyricetravel.com
				</p>
				<p>
					Thank you.
				</p>
			</div>

<?php
	
} else {

?>

	
			
<div class="sixteen columns">
	<p>Sorry, you're not subscribed in the first place. If you wish to subscribe to our mailing list, please email info@stickyricetravel.com</p>
</div>


<?php	

}

?>
			
		</div>
		
	</section>

	
