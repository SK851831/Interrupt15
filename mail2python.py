import mandrill
import sys
mandrill_client = mandrill.Mandrill('iAPmKoJuNA-bRf8qJNPrNA')
message = {
 'html': '''<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Minty-Multipurpose Responsive Email Template</title>
<style type="text/css">
         /* Client-specific Styles */
         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}
         
         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
         a {/*color: #e95353;*/ text-underline:none!important; text-decoration: none;text-decoration:none!important;}
         /*STYLES*/
         table[class=full] { width: 100%; clear: both; }
         
         /*################################################*/
         /*IPAD STYLES*/
         /*################################################*/
         @media only screen and (max-width: 640px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 420px!important;height:219px!important;}
         img[class="col2img"]{width: 420px!important;height:258px!important;}
         img[class="image-banner"]{width: 440px!important;height:106px!important;}
         td[class="menu"]{text-align:center !important; padding: 0 0 10px 0 !important;}
         td[class="logo"]{padding:10px 0 5px 0!important;margin: 0 auto !important;}
         img[class="logo"]{padding:0!important;margin: 0 auto !important;}

         }
         /*##############################################*/
         /*IPHONE STYLES*/
         /*##############################################*/
         @media only screen and (max-width: 480px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important; 
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         table[class="sthide"]{display: none!important;}
         img[class="bigimage"]{width: 260px!important;height:136px!important;}
         img[class="col2img"]{width: 260px!important;height:160px!important;}
         img[class="image-banner"]{width: 280px!important;height:68px!important;}
         
         }
      </style>
</head>
<body>
<p>
	<!-- Start of preheader -->

</p>
<!-- End of preheader -->

<p>
</p>
<p>
	<!-- start of header -->

</p>
<!-- end of header -->

<p>
</p>
<p>
	<!-- image + text -->

</p>
<p>
</p>
<p>
	<!-- start textbox-with-title -->

</p>
<!-- end of textbox-with-title -->

<p>
</p>
<p>
	<!-- start of left image -->

</p>
<!-- end of left image -->

<p>
</p>
<p>
	<!-- start of left image -->

</p>
<!-- end of left image -->

<p>
</p>
<p>
	<!-- fulltext -->

</p>
<!-- end of fulltext -->

<p>
</p>
<p>
	<!-- Start of 2-columns -->

</p>
<!-- End of 2-columns -->

<p>
</p>
<p>
	<!-- 3-columns -->

</p>
<!-- end of 3-columns -->

<p>
</p>
<p>
	<!-- Full + text -->

</p>
<p>
</p>
<p>
	<!-- Start of preheader -->

</p>
<!-- End of preheader -->

<p>
</p>
<table bgcolor="#f6f4f5" width="100%" cellpadding="0" cellspacing="0" border="0" st-sortable="preheader"><tbody><tr>
<td width="100%">
				<table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody>
<!-- Spacing --><tr>
<td width="100%" height="5">
							</td>
						</tr>
<!-- Spacing --><tr>
<td align="right" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 10px;color: #999999" st-content="preheader">
								<p>
									If you cannot read this email, please <span st-webversion="st-webversion" style="text-decoration: none; color: #0db9ea">click here</span>
								</p>
							</td>
						</tr>
<!-- Spacing --><tr>
<td width="100%" height="5">
							</td>
						</tr>
<!-- Spacing -->
</tbody></table>
</td>
		</tr></tbody></table>
<table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" st-sortable="header"><tbody><tr>
<td>
				<table width="580" bgcolor="#0db9ea" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody><tr>
<td>
								<!-- logo -->

								<table width="280" cellpadding="0" cellspacing="0" border="0" align="left" class="devicewidth"><tbody><tr>
<td valign="middle" width="270" style="padding: 10px 0 10px 20px;" class="logo">
												<div class="imgpop">
													<a href="#"><img src="http://interrupt15.in/img/int.png" width="100" alt="logo" border="0" style="display:block; border:none; outline:none; text-decoration:none;" st-image="edit" class="logo" id="gli5ukem70cqh0k9"></a>
												</div>
											</td>
										</tr></tbody></table>
<!-- End of logo --><!-- menu --><table width="280" cellpadding="0" cellspacing="0" border="0" align="right" class="devicewidth"><tbody><tr>
<td width="270" valign="middle" style="font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;line-height: 24px; padding: 10px 0;" align="right" class="menu" st-content="menu">
												<p>
												</p>
											</td>
											<td width="20">
											</td>
										</tr></tbody></table>
<!-- End of Menu -->
</td>
						</tr></tbody></table>
</td>
		</tr></tbody></table>
<table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" st-sortable="bigimage"><tbody><tr>
<td>
				<table bgcolor="#ffffff" width="580" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth" hasbackground="true"><tbody>
<tr>
<td width="100%" height="20">
							</td>
						</tr>
<tr>
<td>
								<table width="540" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidthinner"><tbody>
<tr>
<!-- start of image --><td align="center">
												<div class="imgpop">
													<a href="#"><img width="540" border="0" height="282" alt="" style="display:block; border:none; outline:none; text-decoration:none;" src="http://interrupt15.in/images/Posterinterrupt2%20(1).jpg" class="bigimage" st-image="edit" id="hehzau1gqeok1emi"></a>
												</div>
											</td>
										</tr>
<!-- end of image --><!-- Spacing --><tr>
<td width="100%" height="20">
											</td>
										</tr>
<!-- Spacing --><!-- title --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #333333; text-align:left;line-height: 20px;" st-title="rightimage-title">
												<p>
													Registration Successful
												</p>
											</td>
										</tr>
<!-- end of title --><!-- Spacing --><tr>
<td width="100%" height="20">
											</td>
										</tr>
<!-- Spacing --><!-- content --><tr>
<td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #95a5a6; text-align:left;line-height: 24px;" st-content="rightimage-paragraph">
												<p>
													Thank you for registering for Interrupt ' 15
												</p>
											</td>
										</tr>
<!-- end of content --><!-- Spacing --><tr>
<td width="100%" height="10">
											</td>
										</tr>
<!-- button --><tr>
<td>
												<table height="30" align="left" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" st-button="read-more-button" bgcolor="#0db9ea" style="background-color:#0db9ea; border-top-left-radius:4px; border-bottom-left-radius:4px;border-top-right-radius:4px; border-bottom-right-radius:4px; background-clip: padding-box;font-size:13px; font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300; padding-left:18px; padding-right:18px;"><tbody><tr>
<td width="auto" align="center" valign="middle" height="30" st-title="read-more-button" style="padding-left:18px; padding-right:18px;font-family:Helvetica, arial, sans-serif; text-align:center;  color:#ffffff; font-weight: 300;">
																<p align="center">
																	<span style="color: #ffffff; font-weight: 300;"><a href="https://play.google.com/store/apps/details?id=in.interrupt.android">For Mobile App click here</a></span>
																</p>
															</td>
														</tr></tbody></table>
</td>
										</tr>
<!-- /button --><!-- Spacing --><tr>
<td width="100%" height="20">
											</td>
										</tr>
<!-- Spacing -->
</tbody></table>
</td>
						</tr>
</tbody></table>
</td>
		</tr></tbody></table>
<table width="100%" bgcolor="#f6f4f5" cellpadding="0" cellspacing="0" border="0" st-sortable="postfooter"><tbody><tr>
<td width="100%">
				<table width="580" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth" hasbackground="true"><tbody>
<!-- Spacing --><tr>
<td width="100%" height="5">
							</td>
						</tr>
<!-- Spacing --><tr>py	If you don't want to receive updates. please <span st-unsubscribe="st-unsubscribe" style="text-decoration: none; color: #0db9ea">unsubscribe</span>
								</p>
							</td>
						</tr>
<!-- Spacing --><tr>
<td width="100%" height="5">
							</td>
						</tr>
<!-- Spacing -->
</tbody></table>
</td>
		</tr></tbody></table>
</body>
</html>
''',
'subject': 'Thank you for your Registration',
 'from_email': 'admin@interrupt15.in',
 'to': [{'email': sys.argv[1],
         'name': 'Recipient Name',
         'type': 'to'}]}
result = mandrill_client.messages.send(message=message, async=True, ip_pool='Main Pool')
print result
f=open("mail.txt","a")
f.write(result+"\n")
f.close()
