<?php require_once '../includes/initialize.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Create Account Souvinear</title>
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
	<link rel="stylesheet" href="../css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="../css/css-add2home.css">
	<link rel="stylesheet" href="../css/main.css">

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
					    <rect class="cls-two" x="115.66" y="5.99" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="115.66" y="33.5" width="4" height="17.99" rx="2" ry="2"/>
					    <rect class="cls-two" x="115.66" y="61.01" width="4" height="17.99" rx="2" ry="2"/>

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

					<form class="form-wrap" action="create_processing.php" method="post">
				    <div class="form-group_1">
<!--				      <label for="username">Choose a username</label>-->
				      <img src="../graphics/user.svg" alt="User Icon">
				      <input type="text" name="username" id="username" value="Username">
				    </div>
				    <div class="form-group_2">
<!--				      <label for="password">Choose a password</label>-->
				      <img src="../graphics/lock.svg" alt="Lock Icon">
				      <input type="password" name="password" id="password" placeholder="Password">
				    </div>
                        <div class="form-group_3">
<!--				      <label for="password-confirm">Confirm a password</label>-->
				      <img src="../graphics/lock.svg" alt="Lock Icon">
				      <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirm a password">
				    </div>
						<div class="log-in_wrap" onclick="jmp2LocalPage('')">
								<button type="submit" name="submit" class="log-in">
									<h4>create account</h4>
								</button>
						</div>
                   




<a href="../login.php">

						<div class="no_account_wrap">
							<h4>have an account?</h4>
						</div>






				<div class="bottom_bar_wrap" onclick="jmp2LocalPage('')">
					<svg class="bottom_signup" xmlns="http://www.w3.org/2000/svg" width="375" height="104.2" viewBox="0 0 375 104.2">
					    <linearGradient id="linear-gradient" y1="586.97" x2="375" y2="586.97" gradientUnits="userSpaceOnUse">
					      <stop offset="0" stop-color="#a2d7d1"/>
					      <stop offset="1" stop-color="#f7b4de"/>
					    </linearGradient>
					    <linearGradient id="linear-gradient-2" y1="621.85" x2="375" y2="621.85" gradientUnits="userSpaceOnUse">
					      <stop offset="0" stop-color="#34d1ca"/>
					      <stop offset="1" stop-color="#fe5893"/>
					    </linearGradient>
					  <path class="cls-1_one" d="M0,568.43S22.64,583,115,583,201.91,562.44,302,562.44c63.55,0,73,12.74,73,12.74v36.31H0Z" transform="translate(0 -562.44)"/>
					  <path class="cls-2_two" d="M375,584.9s-16.62-7.85-86-7.85S176.37,599.63,70.67,599.63C10,599.63,0,584.36,0,584.36v82.28H375Z" transform="translate(0 -552.44)"/>
					</svg>
					<h3>Log In</h3>
				</div>
				</a>
				</form>

		</div>

		<!-- Portrait View End  -->


		<!-- Landscape View Start -->
		<div class="land_wrap">

		</div>

		<!-- Landscape View End -->


	<!-- JAVASCRIPT-->
	<!-- JS to change config variables -->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	    // Customize config variable BEFORE loading addToHome.js file this is how to change the parameters
	    var addToHomeConfig = {
	      touchIcon: true
	    }
	</script>
	<script src="../js/js-add2home.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>
