<?php require_once 'includes/initialize.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Spotify Pin Page</title>
	<!-- META -->
	<meta charset="utf-8">
	<!-- Enabling our application to be able to work mobiley -->
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Make the app title different from the web page title -->
	<meta name="apple-mobile-web-app-title" content="myReel">

	<!-- Disable auto phone number detection -->
	<meta name="format-detection" content="telephone=no"> 

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="css/css-add2home.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- ICONS -->
	<!-- iPad retina icon -->
	<link href="graphics/myreel_icon-152x152.png" sizes="152x152" rel="apple-touch-icon">
	<!-- iPad retina icon (iOS < 7) -->
	<link href="graphics/myreel_icon-144x144.png" sizes="144x144" rel="apple-touch-icon">
	<!-- iPad non-retina icon -->
	<link href="graphics/myreel_icon-76x76.png" sizes="76x76" rel="apple-touch-icon">
	<!-- iPad non-retina icon (iOS < 7) -->
	<link href="graphics/myreel_icon-72x72.png" sizes="72x72" rel="apple-touch-icon">

	<!-- iPhone 6 Plus icon -->
	<link href="graphics/myreel_icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
	<!-- iPhone retina icon (iOS < 7) -->
	<link href="graphics/myreel_icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
	<!-- iPhone non-retina icon (iOS < 7) -->
	<link href="graphics/myreel_icon-57x57.png" sizes="57x57" rel="apple-touch-icon">

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

			<div class="nav">
				<img src="graphics/nav.png" alt="Nav">
			</div>


			<div class="spotify_pin_intro">
				<h3>choose a song to pin!</h3>
				<h4>Pinned songs will appear at hotspots for other users to collect.  Make it a good one!</h4>
			</div>


			<div class="overlay"></div>
			<div class="modal">
				<div class="warning_flex">
				  	<div class="warning_mess">
				  		<p>You chose "All of Me" as your pinned song.  Is this correct?</p>
				  	</div>
			  	</div>
			  	<div class="btn_spot_modal_wrap">
				  	<button class="btn_correct">correct</button>
				  	<button class="btn_incorrect">incorrect</button>
			  	</div>
			  </div>
			</div>

			

			<div class="upcoming">
					<div class="spotify_pin_wrap">
						<img src="graphics/spotify_purple.svg" alt="Spotify Purple Icon">
						<h3>Search Spotify:</h3>
						<div class="spotify_search_bar">
					      <img src="graphics/magnify.svg" alt="Search Icon">
					      <input type="text" name="spot_search" id="spot_search"  onfocus="this.placeholder = ''">
				   	 	</div>
					</div>
					<div class="flex_connect">
						<h3 class="connect_user">connected to: ant_green04 - edit</h3>
					</div>
			</div>
			

			<div class="playlist_suggestions_wrap">
				<div class="suggestions_flex">
					<h2>suggestions from your playlist!</h2>
				</div>
				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add modal_open">pin</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">pin</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">pin</h5>
				</div>
			</div>


		</div>
		<!-- Portrait View End  -->


		<!-- Landscape View Start -->
		<div class="land_wrap">

		</div>

		<!-- Landscape View End -->


	<!-- JAVASCRIPT-->
	<!-- JS to change config variables -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/spot_modal.js"></script>
	<script type="text/javascript">
	    // Customize config variable BEFORE loading addToHome.js file this is how to change the parameters 
	    var addToHomeConfig = {
	      touchIcon: true
	    }
	</script>
	<script src="js/js-add2home.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/main.js"></script>
</body>

</html>