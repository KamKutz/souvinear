<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Swap Box Page</title>
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
<?php 
include 'nav.php';
?>
<body>
	<!-- PAGE CONTENT -->

		<!-- Portrait View Start -->
		<div class="port_wrap">

  
			<div id="myModal" class="modal">
			<div class="modal-content">
			<div class="slider">
			    <span class="close">skip</span>
			  <div class="slide_viewer">
			    <div class="slide_group">
			      <div class="slide">
			        
			        <h1>say hello to your swapbox! 
			      </h1>
			        

			      <p>the swapbox is a place where
			you can simulatenously discover
			new music, and make new 
			friends.</p>
			      </div>
			      <div class="slide">
			        <h1>pin your favorite song to 
			your profile. 
			      </h1>
			      <p>your pinned song is the one 
			you love, and want others to
			love as well. its available for
			everyone at a hotspot event to 
			pick up!</p>
			      </div>
			      
			      <div class="slide">
			        <h1>collect new music in a
			unique way.
			      </h1>

			      <p>you’ll also be able to collect
			others pinned songs at a 
			hotspot event. simply tap the
			+ add button to pick it up.</p>
			        
			      </div>
			      
			      <div class="slide">
			        <h1>take a chance and discover
			something new.</h1>
			        <p>tapping the swap button, will 
			randomly collect someone elses
			pinned song at the event. they 
			can accept or decline yours!  
			</p>
			        <div class="bn-align">
			        <button type="button" id="my2Btn">got it!</button></div>
			      </div> 
			    </div> 
			 
			</div>
			</div><!-- End // .slider -->

			<div class="slide_buttons">
			</div>
			  
			</div>

			</div>






			<div class="nav">
				<img src="graphics/nav.png" alt="Nav">
			</div>



			<div class="pinned_container">
				<div class="pin_flex">
					<h2>pinned song</h2>
				</div>
				<h5>edit</h5>
				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<img class="swap_icon" src="graphics/swap_arrow.svg" alt="Swap Icon">
				</div>
			</div>



			<div class="uncollect_container">
				<div class="uncollect_flex">
					<h2>uncollected songs</h2>
				</div>
				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>


				<div class="see_flex">
					<button class="see-more-btn" id="js-see-more">see more</button>
				</div>
			</div>



			<div class="collect_container">
				<div class="collect_flex">
					<h2>collected songs</h2>
				</div>
				<h5>most recent</h5>
				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>

				<div class="song_info">
					<div class="song_flex">
						<h6>John Legend</h6>
						<h6>All of Me</h6>
					</div>
					<img class="temp" src="graphics/legend.jpeg" alt="John Legend">
					<h5 class="add">add</h5>
				</div>
				
				<div class="see_flex">
					<button class="see-more-btn" id="js-see-more">see more</button>
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