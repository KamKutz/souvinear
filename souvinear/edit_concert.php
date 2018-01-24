
<?php require_once 'includes/initialize.php'; ?>
<?php require_once 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Add Concert</title>
	<!-- CSS -->
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
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Add2Home Styling -->
	<link rel="stylesheet" href="css/css-add2home.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<!-- Portrait View Start -->
<div class="port_wrap">

<?php

    if (isset($_POST['submit'])) {
    // form was submitted
    $concert_date = $_POST['concert_date'];
    $headliner = $_POST['headliner'];

    $user_id = $_SESSION['user'];

     $query = "SELECT * FROM concert_info WHERE concert_date = '{$concert_date}' AND headliner = '{$headliner}' AND user_id = '{$user_id}' ";

     $result = mysqli_query($connection, $query);

     if (!$result){
         die('Database query failed.');
     }

         while ($row = mysqli_fetch_assoc($result)) {

             ?>

    <form action="php/edit_processing.php" method="post">
      <div id="gather">

          <div id="headliner-input-continer" class="first-container">
			 <div class="input-icons-container">
				 <img class="icon" src="graphics/headliner.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          	<input type="text" name="headliner" value="<?php echo $row['headliner']; ?>" id="headliner" class="text-input">
		  </div>

		  <div id="opener-input-container" class="first-container">
			  <div class="input-icons-container">
				 <img class="icon" src="graphics/opener.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          	<input type="text" name="supporting_act"  value="<?php echo $row['supporting_act']; ?>" id="supporting_act" class="text-input">
		  </div>

		<div id="venue-input-container" class="second-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/hotspot.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="text" name="venue"  value="<?php echo $row['venue']; ?>" id="venue" class="text-input">
        </div>

		<div id="date-input-container" class="third-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/future.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="date" name="concert_date" id="concert_date" class="text-input" value="<?php echo $row['concert_date']; ?>">
		</div>

        <div id="date-input-container">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/future.svg">
			 	<img class="background-icon" src="graphics/inputcolorblock.svg">
			 </div>
          <input type="time" name="concert_time" id="concert_time" class="text-input" value="<?php echo $row['concert_time']; ?>">
		</div>

		<div id="journal-input-container"  class="container-padding">
			<div class="input-icons-container">
				 <img class="icon" src="graphics/journal.svg">
			 	<img class="background-icon"src="graphics/inputcolorblock.svg">
			 </div>
       <textarea type="text" name="entry" id="entry" value="<?php echo $row['entry']; ?>" class="textarea"></textarea>
		</div>

      </div>
<!--

		<div id="collected-songs"></div>
		<div id="collected-badges"></div>
-->

		<div id="save-entry-container">
			<button type="submit" name="submit"><img src="graphics/saveentry.svg"></button>
		</div>

    </form>
    <form action="php/delete_processing.php" method="post">
        <input type="date" name="concert_date" id="concert_date" value="<?php echo $row['concert_date']; ?>" class="uneeded">


          <input type="text" name="headliner" id="headliner" value="<?php echo $row['headliner']; ?>" class="uneeded">
    <input id="delete_me"type="submit" name="submit" value="delete">
    </form>
    <a href="index.php">Cancel</a>
          <?php
         }
    }
        mysqli_free_result($result);


?>
    </div>

</body>
</html>
