<?php
function read_all($se) {

	$file = fopen('../database/hashtag-20150512.txt', 'r');

	$se = (is_array($se) ? $se : array($se,"--=Do-not-=Disturb--"));	
	$xw = $se;

	
	while (!feof($file)) {
		$line = fgets($file);
		$w = 0;

		foreach( $se as $e ) :

			$w++;
				if(trim($e) == "") {$e="--=Do-not-=Disturb--";}

				if(trim(strpos($line, $e)) <> "") {
					$dd = explode("<|||>",$line);
					echo $se[$w-1]." - Unable to send. Sent on ".$dd[3]."<br />";
					$xw[$w-1] = "reject";
				}
			

		endforeach;
	}
	
	fclose($file);

	$txt = fopen('../database/hashtag-20150518-unsubscribed.txt', 'r');

	while (!feof($txt)) {
		$line = fgets($txt);
		$w = 0;

		foreach( $se as $r ) : 

		$w++; 

			if(trim($r) == "") {$r="--=Do-not-=Disturb--";}
		
			if(trim(strpos($line, $r)) <> "") {
			echo $se[$w-1]." - in unsubscribed list.<br />";
			$xw[$w-1] = "reject";	
			}
		

		endforeach;
	}

	fclose($txt);  
	return $xw;
}

$code = stripslashes($_POST['code']);

if($code == 'razorbytes2015') {

$P = $_POST['p']; 
$N = $_POST['n']; 

$P = read_all($P);

$eol="\r\n";
$headers="";

$Subject = "Sticky Rice Travel Would Like Your Feedback";

$name = "Sticky Rice Travel Customer Service";
$from = "info@stickyricetravel.com";

$headers .= 'From: '.$name.'<'.$from.'>'.$eol;
$headers .= 'Reply-To: '.$name.'<'.$from.'>'.$eol;
$headers .= 'Return-Path: '.$name.'<'.$from.'>'.$eol;    // these two to set reply address
$headers .= 'Content-type: text/html; charset=iso-8859-1'.$eol;
$Body = "";


$filename = '../database/hashtag-20150512.txt';

if (is_writable($filename)) {

    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }

	$c = 0;
	
	foreach( $P as $e ) :
		$c++;
		
		$EmailTo = $e;
		$P[$c-1] = "completed";
		
		if (in_array(trim($EmailTo),$P)) { 
		
		} else {		
		
		if((trim($EmailTo) <> "") && (trim($EmailTo) <> "reject")) {
		
			$cust_name = $N[$c-1];
			
			if(trim($cust_name) == "") { $cust_name = "Customer";}
			
			$code = md5($e."221wq");
			
			$cust_name = str_replace("<|||>","<lll>",$cust_name);
			$e = str_replace("<|||>","<lll>",$e);
			
			$content = md5($e."221wq")."<|||>".$e."<|||>".$cust_name."<|||>".date('Y-m-d')."\n";
			
			$Body = '
				<table border="0" cellpadding="0" cellspacing="0" width="600px" style="margin:auto;max-width:600px">
				<tbody style="background-color:#ffffff;color:#000000">
				<tr>
				<td style="padding:15px 15px 15px 15px;border-radius:5px 5px 0 0">

					<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td valign="top" width="100%">
								
									<table align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											<tr>
												<td width="100%">
												
													<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td height="5" width="100%">&nbsp;</td>
															</tr>
														</tbody>
													</table>
													
													<table bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td width="100%">
																	<table border="0" cellpadding="0" cellspacing="0" width="600">
																		<tbody>
																			<tr>
																				<td width="30">&nbsp;</td><td width="540">
																					<table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse" width="540">
																						<tbody>
																							<tr>
																								<td align="left" >
																									<img alt="">
																									<span>
																										<a href="http://www.stickyricetravel.com" name="" style="color:#0079ff" target="_blank">
																											<img src="http://www.stickyricetravel.com/c/logo.png">
																										</a>
																									</span>
																								</td>
																							</tr>
																						</tbody>
																					</table>
																				</td>
																				<td width="5">&nbsp;</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
													<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td height="5" width="100%">&nbsp;</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td valign="top" width="100%">
									<table align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											<tr>
												<td width="100%">
													<table bgcolor="#c9b48f" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td align="center" width="100%">
																	<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
																		<tbody>
																			<tr>
																				<td width="30">&nbsp;</td>
																				<td width="540">
																					<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse" width="540">
																						<tbody>
																							<tr>
																								<td height="20">&nbsp;</td>
																							</tr>
																							<tr>
																								<td align="left" style="font-weight:700;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;color:#ffffff;font-size:24px;line-height:34px">
																									<span>Is Sticky Rice Travel Doing Alright?</span>
																								</td>
																							</tr>
																							<tr>
																								<td height="20">&nbsp;</td>
																							</tr>
																						</tbody>
																					</table>
																				</td>
																				<td width="30">&nbsp;</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td valign="top" width="100%">
									<table align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											<tr>
												<td width="100%">
													<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td align="center" width="100%">
																	<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
																		<tbody>
																			<tr>
																				<td width="30">&nbsp;</td>
																				<td width="540">
																					<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse" width="540">
																						<tbody>
																							<tr>
																								<td height="10">&nbsp;</td>
																							</tr>
																							<tr>
																								<td align="left" style="margin:0;padding:15px 0;font-weight:400;font-size:13px;color:#333333;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;line-height:10px">
																									<span>Hi '.$cust_name.'</span><span>, </span>
																								</td>
																							</tr>
																							<tr>
																								<td align="left" style="margin:0;padding:15px 0;font-weight:400;font-size:13px;color:#333333;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;line-height:20px">
																									<span>We would like to say thank you for giving us the opportunity to plan your trip. At Sticky Rice Travel, we want to maintain a high standard of service in all of the products we offer. Your feedback and opinion are very important in assessing our performance, and therefore would highly appreciate it if you could take some time to fill out our feedback form.</span>
																								</td>
																							</tr>
																							<tr>
																								<td align="left" style="margin:0;padding:15px 0;font-weight:400;font-size:13px;color:#333333;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;line-height:20px">
																									<span>
																										Thank you so much for your time and we look forward to seeing you again in this part of the world someday. Follow our development on our social medias to see what exciting things we get up to! Take care!
																									</span>
																								</td>
																							</tr>
																							<tr>
																								<td align="left" style="margin:0;padding:15px 0;font-weight:400;font-size:13px;color:#333333;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;line-height:10px">
																									<span>STICKY RICE TRAVEL </span>
																								</td>
																							</tr>
																							<tr>
																								<td align="center" bgcolor="#ffffff" style="padding-top:20px" valign="top">
																									<table align="left" bgcolor="#3575d3" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;margin:0;border-radius:5px">
																										<tbody>
																											<tr>
																												<td align="center" bgcolor="#00ffcc" style="border:1px solid #999;border-radius:1px;padding:7px 20px;font-size:13px;line-height:18px;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;color:#333333;margin:0!important" valign="middle">
																													<a href="http://www.stickyricetravel.com/how-is-sticky-rice-travel-doing/'.$code.'" target="_blank">Start</a>
																												</td>
																											</tr>
																										</tbody>
																									</table>
																								</td>
																							</tr>
																							<tr>
																								<td height="10">&nbsp;</td>
																							</tr>
																						</tbody>
																					</table>
																				</td>
																				<td width="30">&nbsp;</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
													<table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td height="40" width="100%">&nbsp;</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table align="center" bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="100%">
						<tbody>
							<tr>
								<td valign="top" width="100%">
									<table align="center" border="0" cellpadding="0" cellspacing="0">
										<tbody>
											<tr>
												<td width="100%">
													<table bgcolor="#e2cba2" border="0" cellpadding="0" cellspacing="0" width="600">
														<tbody>
															<tr>
																<td width="100%">
																	<table border="0" cellpadding="0" cellspacing="0" width="600">
																		<tbody>
																			<tr>
																				<td width="600">
																					<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse" width="540">
																						<tbody>
																							<tr>
																								<td align="left" style="margin:0;padding:20px 0px;font-weight:400;font-size:13px;color:#181818;font-family:\'Montserrat\',Helvetica,Arial,sans-serif;line-height:25px">
																									<span>
																										Sticky Rice Travel<br />
																										58 Jalan Pantai, 3rd Floor<br />
																										88000 Kota Kinabalu<br />
																										Sabah, Malaysia<br>
																										<a href="tel:6088250588" value="6088250588" target="_blank">(60)88 250588  /  (60)88 251654</a> 
																									</span>
																								</td>
																							</tr>
																						</tbody>
																					</table>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
				</tr>
				</tbody>
				<tfoot style="background-color:#ffffff;color:#000000">
				<tr>
				<td style="padding:15px 15px 15px 15px;border-radius:0 0 5px 5px">  
					This message was sent by Sticky Rice Travel Sdn Bhd.
					To unsubscribe click the following link:
					<a href="http://www.stickyricetravel.com/unsubscribe/'.$code.'">Unsubscribe</a>
				</td>
				</tr>
				</tfoot>
				</table>
			';
			
				$err = "0";
				
				if ( strlen( $EmailTo ) < 3 ) {$err="1";}
				if ( strpos( $EmailTo, '@', 1 ) === false ) {$err="1";}
				list( $local, $domain ) = explode( '@', $EmailTo, 2 );
				if ( !preg_match( '/^[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/', $local ) ) {$err="1";}
				if ( preg_match( '/\.{2,}/', $domain ) ) {$err="1";}
				if ( trim( $domain, " \t\n\r\0\x0B." ) !== $domain ) {$err="1";}
				$subs = explode( '.', $domain );
				if ( 2 > count( $subs ) ) {$err="1";}

				foreach ( $subs as $sub ) {
					if ( trim( $sub, " \t\n\r\0\x0B-" ) !== $sub ) {$err="1";}
					if ( !preg_match('/^[a-z0-9-]+$/i', $sub ) ) {$err="1";}
				}			
				
				if($err == "1") {
					
					echo $EmailTo." - this is an invalid email. <br />";
					
				} else {
					
					$success = mail($EmailTo, $Subject, $Body, $headers);

					if ($success == 1) {
						echo $EmailTo." - mail sent and recorded. <br />";
						if (fwrite($handle, $content) === FALSE) {
							echo "Cannot write to file ($filename)";
							exit;
						}					
					} else {
						echo $EmailTo." - unable to send email. <br />";
					}
				}
				
			}
		}
		
	endforeach;

    fclose($handle);

} else {
	
    echo "The file $filename is not writable";
	
}

} else {
	
	echo "Invalid authorization code";
	
}
?>