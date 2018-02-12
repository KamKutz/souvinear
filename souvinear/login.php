<?php require_once 'includes/initialize.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Log-in Souvinear</title>
	<!-- META -->
	<meta charset="utf-8">
	<!-- Enabling our application to be able to work mobiley -->
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Make the app title different from the web page title -->
	<meta name="apple-mobile-web-app-title" content="souvinear">

	<!-- Disable auto phone number detection -->
	<meta name="format-detection" content="telephone=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="css/css-add2home.css">
	<link rel="stylesheet" href="css/main.css">

	  	<!-- ICONS -->
  	<!-- iPad retina icon -->
  	<link href="graphics/souvinear_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
  	<!-- iPad retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
  	<!-- iPad non-retina icon -->
  	<link href="graphics/souvinear_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
  	<!-- iPad non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

  	<!-- iPhone 6 Plus icon -->
  	<link href="graphics/souvinear_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
  	<!-- iPhone retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
  	<!-- iPhone non-retina icon (iOS < 7) -->
  	<link href="graphics/souvinear_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

	<!-- HACKS -->
	<!-- Prevent text size change on orientation change -->
	<style>
		html {
			-webkit-text-size-adjust: 100%;
		}
	</style>

</head>

<body>
	<!-- PAGE CONTENT -->

		<!-- Portrait View Start -->
		<div class="port_wrap">

				<div class="intro_wrap">
					<h3>souvinear</h3>
					<svg xmlns="http://www.w3.org/2000/svg" width="174.61" height="89.4" viewBox="-35 -20 300 89.4">
					  <g class="ticket_11" id="Ticket_11">
					    <path class="cls-one" d="M1015,890.74v19.42s16.15,6,16.15,26.34S1015,961.87,1015,961.87v18.26h127.46v-89.4Z" transform="translate(-1015 -890.74)"/>
					    <rect class="cls-two" x="115.66" y="8.99" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="115.66" y="36.5" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="115.66" y="64.01" width="4" height="17.99" rx="2" ry="2"/>

					  </g>
					  <g class="ticket_22" id="Ticket_22">
					    <path class="cls-one" d="M1148.6,890.74v89.4h61V961.36s-15.38-8.52-15.38-25.92,15.38-25.35,15.38-25.35V890.74Z" transform="translate(-1015 -890.74)"/>
					    <rect class="cls-two" x="139.8" y="8.19" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="139.8" y="35.71" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="139.8" y="63.22" width="4" height="17.99" rx="2" ry="2"/>
					     <rect class="cls-two bar_scan" x="0" y="0" width="10" height="90" rx="2" ry="2"/>
					  </g>
					</svg>
				</div>

				<form class="form-wrap" action="php/login_processing.php" method="post">
				    <div class="form-group_1">
<!--				      <label for="username">Username</label>-->
				      <img src="graphics/user_white.svg" alt="User Icon">
				      <input type="text" name="username" id="username" placeholder="Username" onfocus="this.placeholder = ''">
				    </div>

				    <div class="form-group_2">
<!--				      <label for="password">Password</label>-->
				      <img src="graphics/lock_white.svg" alt="Lock Icon">
				      <input type="password" name="password" id="password" placeholder="Password" onfocus="this.placeholder = ''">
				    </div>

					<div class="log-in_wrap" onclick="jmp2LocalPage('')">
						<button type="submit" name="submit" class="log-in">
							<h4>login</h4>
						</button>
					</div>
				</form>




<a href="php/createAccount.php" class="account_link">

						<div class="no_account_wrap">
							<h4>no account?</h4>
						</div>


				<div class="bottom_bar_wrap" onclick="jmp2LocalPage('')">
					<svg class="bottom_signup" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 97.88">
					    <linearGradient id="linear-gradient" x1="-451.01" y1="556.78" x2="-449.83" y2="556.78" gradientTransform="matrix(375, 0, 0, -97.88, 169048, 54545.9)" gradientUnits="userSpaceOnUse">
					      <stop offset="0" stop-color="#2dd5cc"/>
					      <stop offset="1" stop-color="#fe5893"/>
					    </linearGradient>
					    <linearGradient id="linear-gradient-2" y1="26.55" x2="374.86" y2="26.55" gradientUnits="userSpaceOnUse">
					      <stop offset="0" stop-color="#92e6e5"/>
					      <stop offset="1" stop-color="#f8a9ca"/>
					    </linearGradient>
					    <g id="BOTTOMbutton">
					      <g id="Group">
					        <path id="Path-3-Copy-2" class="cls-1" d="M0,.51C62.85,12.84,74.79,13.29,143.12,10.89,218.71,4.17,277.58-6.48,375,6V98L0,98.1Z" transform="translate(0 -0.22)"/>
					      </g>
					      <path id="Path_337" data-name="Path 337" class="cls-2" d="M0,.49l0,50s20.24,5.27,70,0,61.19-12.37,130-27.06c34-7.86,71.62-18.79,118.46-17s56.43,10.27,56.43,10.27V5.89S334.53.51,301,.35c-15.23-.07-58.25-1.5-144,9.4a678,678,0,0,1-91.71,1.08C29.09,6.76,0,.49,0,.49Z" transform="translate(0 -0.22)"/>
					   </g>
					</svg>
					<h3>Sign Up</h3>
				</div>
				</a>

		</div>

		<!-- Portrait View End  -->


		<!-- Landscape View Start -->
		<div class="land_wrap">

		</div>

		<!-- Landscape View End -->


	<!-- JAVASCRIPT-->
	<!-- JS to change config variables -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	    // Customize config variable BEFORE loading addToHome.js file this is how to change the parameters
	    var addToHomeConfig = {
	      touchIcon: true
	    }
	</script>
	<script src="js/js-add2home.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
