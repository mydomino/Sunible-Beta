<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description"
content="Sunible allows homeowners to find, compare, and request quotes from local solar installers with a click of a button">
<meta name="keywords"
content="solar, online, installers, home, residential, compare, utility, save, money, panels, simple">
<title>Sunible</title>
<link rel="shortcut icon" href="favicon.ico" />

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-modal.css" />
<link rel="stylesheet" type="text/css" href="css/flat-ui.css" />
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
<link rel="stylesheet" type="text/css" href="css/nanoscroller.css" />
<link rel="stylesheet" type="text/css" href="css/general.css" />
<link rel="stylesheet" type="text/css" href="css/fonts.css" />
<link rel="stylesheet" type="text/css" href="css/forms.css" />
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/pages.css" />

<script type="text/javascript">var ie;</script>

<!--GOOGLE ANALYTICS TRACKING SCRIPT-->

<script type="text/javascript"><!--
 function checkPhone (obj) {
  str = obj.value.replace(/[^0-9]+?/g, '');
  switch (str.length) {
   case 0:
	 alert('Please enter numbers only.');
	 obj.select();
	 return;
   case 7:
	 str = str.substr(0,3)+"-"+str.substr(3,4);
	 break;
   case 10:
	 str = "("+str.substr(0,3)+") "+str.substr(3,3)+"-"+str.substr(6,4);
	 break;
   default:
	 alert('Please enter a 7 digit phone number (with area code, if applicable).');
	 obj.select();
	 return;
  }
  obj.value = str;
 }
--></script>

<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-38493701-1']);
		_gaq.push(['_setDomainName', 'sunible.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview', 'vpv/landing.html']);

		(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				}
		)();
		
		window.onbeforeunload = function() {
		_gaq.push(['_trackEvent', 'Behavior', 'Reload', 'Browser Refresh', 1, false]);
		return "Your progress will not be saved.";
		};

		window.onresize = function() {
		_gaq.push(['_trackEvent', 'Behavior', 'Resize', 'Browser Resize', 1, false]);
		};		
		
</script>

</head>

<body>

		<div class="pages">
				<header
						class="page_header homepage dashboard social_proof registration message thank_you thank_you_reg">
						<!-- header has those classes to be toggled with those pages.  With that approach, no need to duplicate the header on each page we have it-->
						<div class="questions">
								<span class="question why_solar" data-toggle="tooltip"
										data-placement="bottom"
										onMouseover="_gaq.push(['_trackEvent', 'Tooltips', 'Mouseover', 'Why Solar', 1, false]);"
										title="A solar-powered home can lower your electricity bills from day one, which is why over 300,000 homeowners in the U.S. have gone solar! Also, the Sun is the cleanest, most abundant source of energy on earth.">Why
										solar?</span><span class="question why_sunible"
										onMouseover="_gaq.push(['_trackEvent', 'Tooltips', 'Mouseover', 'Why Sunible', 1, false]);"
										data-toggle="tooltip" data-placement="bottom"
										title="There are a lot of solar providers to choose from, but there is no easy way to find, compare and select the right one. We will help you from start to finish, and answer every question you have along the way (and yes, for free!)">Why
										Sunible?
								</span>
						</div>
						<a href="/" class="logo sunible"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Landing Page Logo', 1, false]);"
						onClick="_gaq.push(['_trackEvent', 'Links', 'Click', 'Landing Page Logo', 1, false]);"><img
						src="images/logo_sunible.png" alt="" /> </a>
				</header>
						
				<?php include ("templates/home.php"); ?>
				<?php include ("templates/social_proof.php"); ?>
				<?php include ("templates/dashboard.php"); ?>
				<?php include ("templates/registration.php"); ?>
				<?php include ("templates/thank_you.php"); ?>
				<?php include ("templates/registration_thank_you.php"); ?>
				<?php include ("templates/sign_up.php"); ?>
				<?php include ("templates/contact_us.php"); ?>
				<?php include ("templates/faq.php"); ?>
				<?php include ("templates/page_message.php"); ?>
				<?php include ("templates/modal_message.php"); ?>
				<?php include ("templates/tos.php"); ?>
				<?php include ("templates/pp.php"); ?>
				<?php include ("templates/about_us.php"); ?>
				<?php include ("templates/jobs.php"); ?>
				
				<!-- FOOTER -->
				<footer
				class="page_footer homepage social_proof dashboard registration message thank_you thank_you_reg">
				<!-- footer has those classes to be toggled with those pages.  With that approach, no need to duplicate the footer on each page we have it-->
				<nav class="bottom navigation">
						<a href="#"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Footer FAQ', 1, false]);"
						onClick="_gaq.push(['_trackEvent', 'Links', 'Click', 'Footer FAQ', 1, false]);"
						
						class="launcher open faqs">FAQs</a> <a
						href="http://blog.sunible.com" target="_blank"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Footer Blog', 1, false]);"
						onClick="_gaq.push(['_trackPageview', 'vpv/blog.html']);">Blog</a>
						<a href="#"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Footer Contact Form', 1, false]);"
						onClick="_gaq.push(['_trackEvent', 'Links', 'Click', 'Footer Contact Form', 1, false]);"
						
						class="launcher open contact_us">Contact</a> <a href="#"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Footer About Us', 1, false]);"
						onClick="_gaq.push(['_trackEvent', 'Links', 'Click', 'Footer About Us', 1, false]);"
						
						class="launcher open about_us">About Us</a> <a href="#"
						onMouseover="_gaq.push(['_trackEvent', 'Links', 'Mouseover', 'Footer Terms of Service', 1, false]);"
						onClick="_gaq.push(['_trackEvent', 'Links', 'Click', 'Footer Terms of Service', 1, false]);"
						
						class="launcher open terms_of_service">Terms</a>
						
				</nav>
						
				<span class="copyright">&copy; Sunible Inc. 2013</span>
						
				</footer>
		</div>

<!-- JS -->
<script type="text/javascript" src="js/jquery/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/jquery/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery/additional-methods.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropkick-1.0.0.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.json-2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-tooltip.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/leaflet.js"></script>
<script type="text/javascript" src="js/custom_checkbox_and_radio.js"></script>
<script type="text/javascript" src="js/global_methods.js"></script>
<script type="text/javascript" src="js/server_calls.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/pages.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
<script type="text/javascript" src="js/application_init.js"></script>

</body>
</html>
