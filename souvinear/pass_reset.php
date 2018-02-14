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

				<div class="pass_reset_wrap">
					 <h3>reset password</h3>
				</div>


				<div class="form_pass_reset_wrap">

				    <div class="form-group_pass">
				      <img class="email_move_down" src="graphics/email.svg" alt="Lock Icon">
				      <input type="password" name="password" id="password" placeholder="Enter email address">
				    </div>

				    <div class="form-group_pass">
				      <img src="graphics/lock_white.svg" alt="Lock Icon">
				      <input type="password" name="password" id="password" placeholder="Enter old password">
				    </div>

	                 <div class="form-group_pass">
				      <img src="graphics/lock_white.svg" alt="Lock Icon">
				      <input type="password" name="password-confirm" id="password-confirm" placeholder="Enter new password">
				    </div>

				    <div class="form-group_pass">
				      <img src="graphics/lock_white.svg" alt="Lock Icon">
				      <input type="password" name="password-confirm" id="password-confirm" placeholder="Enter new password">
				    </div>
				 </div>

				<div class="flex_confirm_btn">
					<button class="btn btn--login" id="js-btn-login">confirm</button>
				</div>


				<div class="bottom_bar_cancel_wrap" onclick="jmp2LocalPage('')">
					<svg class="bottom_cancel" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 375 97.88">
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
					<h3>Cancel</h3>
				</div>

		</div>

		<!-- Portrait View End  -->


		<!-- Landscape View Start -->
		<div class="land_wrap">

		</div>

		<!-- Landscape View End -->


	<!-- JAVASCRIPT-->
	<!-- JS to change config variables -->
	<script src="https://spotify-player.herokuapp.com/spotify-player.js"></script>
	<script src="js/spotify.js"></script>
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
