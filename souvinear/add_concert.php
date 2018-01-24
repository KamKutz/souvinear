<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

    <!-- Enabling our application to be able to work mobiley -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Make the app title different from the web page title -->
    <meta name="apple-mobile-web-app-title" content="myReel">

    <!-- Disable auto phone number detection -->
    <meta name="format-detection" content="telephone=no"> 
    <title>Add Concert</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Add2Home Styling -->
    <link rel="stylesheet" href="css/css-add2home.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- Portrait View Start -->
<div class="port_wrap">
    <form action="php/concert_processing.php" method="post">
      <div id="gather">
		 
		 <div id="headliner-input-continer" class="first-container">
			 <div class="input-icons-container">
				 <img class="icon" src="graphics/headliner.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          	<input type="text" name="headliner" placeholder="Headliner" id="headliner" class="text-input">
		  </div>
		  
		  <div id="opener-input-container" class="first-container">
			  <div class="input-icons-container">
				 <img class="icon" src="graphics/opener.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          	<input type="text" name="supporting_act"  placeholder="Supporting Act" id="supporting_act" class="text-input">
		  </div>
        
		
<!--
		<div id="event-input-container" class="second-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/icon_venue.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
			<input type="text" name="eventTitle" placeholder="Event Title" id="eventTitle" class="text-input"> 
	    </div>
-->
   		
		<div id="venue-input-container" class="second-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/hotspot.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="text" name="venue"  placeholder="Venue" id="venue" class="text-input">
        </div>
		  
		<div id="date-input-container" class="third-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="date" name="concert_date" id="concert_date" class="text-input" placeholder="date">
		</div>
     	
        <div id="date-input-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="time" name="concert_time" id="concert_time" class="text-input" placeholder="">
		</div>  
          
<!--
		<div id="photo-input-container">
			<input type="file" name="image" id="photoInput">  
		</div>
-->
		 
		<div id="journal-input-container"  class="container-padding">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/journal.svg">
			 	<img class="background-icon"src="graphics/inputcolorblock.svg">
			 </div>
       <textarea type="text" name="entry" id="entry" placeholder="What was the best part of the night?" class="textarea"></textarea>
		</div>

      </div>
		
		<div id="collected-songs"></div>
		<div id="collected-badges"></div>
		
		<div id="save-entry-container">
			<button type="submit" name="submit"><img src="graphics/saveentry.svg"></button>
		</div>
    </form>
    
        <form action='php/logout_processing.php' method='post'>
    <input type='submit' name='submit' value='Log Out'>
    </form>
    
    <a href="index.php">Cancel</a>
	</div>
</body>
</html>