<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- What it tries to add as homepage app name -->
	<title>Journal Display Page</title>
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
		
<!--
			<div class="nav">
				<img src="graphics/nav.png" alt="Nav">
                <form action='php/logout_processing.php' method='post'>
    <input type='submit' name='submit' value='Log Out'>
    </form>
			</div>
-->
			<div class="upcoming">
				<h2>Upcoming Events</h2>
				<div class="upcoming_events">
					<h4>You don't have any upcoming events!</h4>
					<img src="graphics/hotspot-purple.svg" alt="Hotspot Icon">
				</div>
			</div>

            <div class="plus_button" onclick="jmp2LocalPage('add_concert.php')">
				<img src="graphics/add-button.svg" alt="Plus Button">
			</div>
            

			<div class="my_journal">
				<h2>My Entries</h2>

				<div class="entries">
					<h4>You don't have any journal entries!</h4>
					<h4>Why not start one now?</h4>
					<h6>Click the add button below</h6>
				</div>
                
            <?php
    
            $user_id = $_SESSION['user'];
    
            $query = 'SELECT * ';
            $query .= 'FROM concert_info WHERE';
            $query .= " user_id = '{$user_id}'";
            $query .= "ORDER BY concert_date ASC";
            $result = mysqli_query($connection, $query);
 
            if (!$result) {
              die('Database query failed.');
            }

//            $row = mysqli_fetch_row($result);
            
            while ($concert_info = mysqli_fetch_assoc($result)) { 
          ?>
				<div>
					<div class="flex" id="entry_flex">
                       
                    <div>
                    <form action="edit_concert.php" method="post" id="edit_entry">
                        <p>
                          <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
                          </p>   
                        <p>
                          <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
                        </p>                 

                        <input type="submit" name="submit" id="concert_edit" value="Edit">
                    </form>
                    </div>
                        
                        <div class="concert_info">
						<h6><?php echo $concert_info['headliner']; ?></h6>
						<h6><?php echo $concert_info['concert_date']; ?></h6>
						<h6><?php echo $concert_info['venue']; ?></h6>
                        </div>
                        
                        <div>
                        <form action="journal_complete.php" method="post">
                        <button type="submit" name="submit">
                            <p>
                          <input type="text" name="headliner" id="headliner" value="<?php echo $concert_info['headliner']; ?>" class="uneeded">
                          </p>   
                        <p>
                          <input type="date" name="concert_date" id="concert_date" value="<?php echo $concert_info['concert_date']; ?>" class="uneeded">
                        </p>                 

					   <img class="legend" src="graphics/legend.jpeg" alt="John Legend">
                            </button>
                            </form>
                    </div>
            
				</div>
                
                        <?php
                        
          } 
        
        mysqli_free_result($result);
        ?>
        

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
	<script src="js/main.js"></script>
</body>

</html>