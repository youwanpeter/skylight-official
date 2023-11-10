<?php

    $to = "youwanpeter226@gmail.com";
    $from = $_REQUEST['feedbackEmail'];
    $feedbackName = $_REQUEST['feedbackName'];
    $feedbackMessage = $_REQUEST['feedbackMessage'];

    $headers = "From: $from";
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = 'You Have A Booking From Sri Lankan Julian Tours';

    $logo = './img/logo.png';
    $link = 'https://www.srilankanjuliantours.com/';

    $body = "<!DOCTYPE html>
	<html xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office' lang='en'>
	
	<head>
		<title></title>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
		<style>
			* {
				box-sizing: border-box;
			}
	
			body {
				margin: 0;
				padding: 0;
			}
	
			a[x-apple-data-detectors] {
				color: inherit !important;
				text-decoration: inherit !important;
			}
	
			#MessageViewBody a {
				color: inherit;
				text-decoration: none;
			}
	
			p {
				line-height: inherit
			}
	
			.desktop_hide,
			.desktop_hide table {
				mso-hide: all;
				display: none;
				max-height: 0px;
				overflow: hidden;
			}
	
			.image_block img+div {
				display: none;
			}
	
			@media (max-width:655px) {
				.desktop_hide table.icons-inner {
					display: inline-block !important;
				}
	
				.icons-inner {
					text-align: center;
				}
	
				.icons-inner td {
					margin: 0 auto;
				}
	
				.row-content {
					width: 100% !important;
				}
	
				.stack .column {
					width: 100%;
					display: block;
				}
	
				.mobile_hide {
					max-width: 0;
					min-height: 0;
					max-height: 0;
					font-size: 0;
					display: none;
					overflow: hidden;
				}
	
				.desktop_hide,
				.desktop_hide table {
					max-height: none !important;
					display: table !important;
				}
			}
		</style>
	</head>
	
	<body style='text-size-adjust: none; background-color: #fff; margin: 0; padding: 0;'>
		<table class='nl-container' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff;'>
			<tbody>
				<tr>
					<td>
						<table class='row row-1' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
							<tbody>
								<tr>
									<td>
										<table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; background-color: #000; border-radius: 20px; width: 635px; margin: 0 auto;' width='635'>
											<tbody>
												<tr>
													<td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: left; font-weight: 400; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
														<table class='image_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
															<tr>
																<td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
																	<div class='alignment' align='center' style='line-height:10px'><img src='https://13c54a1de1.imgdist.com/public/users/Integrators/BeeProAgency/1017451_1002357/Logo-2048x2048.png' style='height: auto; display: block; border: 0; max-width: 158.75px; width: 100%;' width='158.75'></div>
																</td>
															</tr>
														</table>
														<table class='heading_block block-2' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
															<tr>
																<td class='pad'>
																	<h1 style='margin: 0; color: #40826d; direction: ltr; font-family: Verdana, Geneva, sans-serif; font-size: 38px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;'><strong><span class='tinyMce-placeholder'>Pricing</span></strong></h1>
																</td>
															</tr>
														</table><!--[if mso]><style>#list-r0c0m2 ul{margin: 0 !important; padding: 0 !important;} #list-r0c0m2 ul li{mso-special-format: bullet;}#list-r0c0m2 .levelOne li {margin-top: 0 !important;} #list-r0c0m2 .levelOne {margin-left: -20px !important;}#list-r0c0m2 .levelTwo li {margin-top: 0 !important;} #list-r0c0m2 .levelTwo {margin-left: 13px !important;}#list-r0c0m2 .levelThree li {margin-top: 0 !important;} #list-r0c0m2 .levelThree {margin-left: 46px !important;}#list-r0c0m2 .levelFour li {margin-top: 0 !important;} #list-r0c0m2 .levelFour {margin-left: 79px !important;}</style><![endif]-->
														<table class='list_block block-3' id='list-r0c0m2' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;'>
															<tr>
																<td class='pad'>
																	<div class='levelOne' style='margin-left: 0;'>
																		<ul class='leftList' start='1' style='margin-top: 0; margin-bottom: 0; padding: 0; padding-left: 20px; color: #fff; direction: ltr; letter-spacing: 0; text-align: left; mso-line-height-alt: 24px; font-family: Verdana,Geneva,sans-serif; font-size: 16px; font-weight: 700; line-height: 150%; list-style-type: disc;'>
																			<li style='text-align: left; margin-bottom: 26px;'>Name: {$feedbackName}</li>
																			<li style='text-align: left; margin-bottom: 26px;'>Email: {$from}</li>
																			<li style='text-align: left; margin-bottom: 26px;'>Username: {$feedbackMessage}</li>
																			
																		</ul>
																	</div>
																</td>
															</tr>
														</table>
														<table class='button_block block-4' width='100%' border='0' cellpadding='10' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
															<tr>
																<td class='pad'>
																	<div class='alignment' align='center'><!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://www.eyeraxtech.com/' style='height:50px;width:159px;v-text-anchor:middle;' arcsize='8%' stroke='false' fillcolor='#40826d'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#ffffff; font-family:Verdana, sans-serif; font-size:20px'><![endif]--><a href='https://www.eyeraxtech.com/' target='_blank' style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#40826d;border-radius:4px;width:auto;border-top:0px solid transparent;font-weight:700;border-right:0px solid transparent;border-bottom:0px solid transparent;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Verdana, Geneva, sans-serif;font-size:20px;text-align:center;mso-border-alt:none;word-break:keep-all;'><span style='padding-left:20px;padding-right:20px;font-size:20px;display:inline-block;letter-spacing:normal;'><span style='word-break: break-word; line-height: 40px;'>Read More</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
						<table class='row row-2' align='center' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
							<tbody>
								<tr>
									<td>
										<table class='row-content stack' align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 635px; margin: 0 auto;' width='635'>
											<tbody>
												<tr>
													<td class='column column-1' width='100%' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: left; font-weight: 400; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;'>
														<table class='icons_block block-1' width='100%' border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
															<tr>
																<td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
																	<table width='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;'>
																		<tr>
																			<td class='alignment' style='vertical-align: middle; text-align: center;'><!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
																				<!--[if !vml]><!-->
																				<table class='icons-inner' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;' cellpadding='0' cellspacing='0' role='presentation'><!--<![endif]-->
																					<tr>
																						<td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='https://www.designedwithbee.com/?utm_source=editor&utm_medium=bee_pro&utm_campaign=free_footer_link' target='_blank' style='text-decoration: none;'><img class='icon' alt='Designed with BEE' src='https://d1oco4z2z1fhwp.cloudfront.net/assets/bee.png' height='32' width='34' align='center' style='height: auto; display: block; margin: 0 auto; border: 0;'></a></td>
																						<td style='font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='https://www.designedwithbee.com/?utm_source=editor&utm_medium=bee_pro&utm_campaign=free_footer_link' target='_blank' style='color: #9d9d9d; text-decoration: none;'>Designed with BEE</a></td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</td>
															</tr>
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
		</table><!-- End -->
	</body>
	
	</html>";
   

    $send = mail($to, $subject, $body, $headers);
    

?>