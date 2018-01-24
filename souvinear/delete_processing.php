<?php
require_once 'includes/initialize.php'; 

if (isset($_POST['submit'])) {
    
$user_id = $_SESSION['user'];
$headliner = $_POST['headliner'];
$concert_date = $_POST['concert_date'];

$query = "DELETE FROM concert_info WHERE concert_date = '{$concert_date}' AND headliner = '{$headliner}' AND user_id = '{$user_id}' ";

$result = mysqli_query($connection, $query);
      
    if ($result) {
        // Success

        redirect_to("main.php");

    } 
      else {
          die ("Database query failed. " . mysqli_error($connection));
    }
      
    
}
?>