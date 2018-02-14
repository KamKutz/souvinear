<?php
require_once 'includes/initialize.php'; 

if (isset($_POST['submit'])) {
    
$user_id = $_SESSION['user'];
$concert_date = $_POST['concert_date'];
$concert_time = $_POST['concert_time'];
$venue = $_POST['venue'];
$headliner = $_POST['headliner'];
$supporting_act = $_POST['supporting_act'];
$entry = $_POST['entry'];

$query = 'UPDATE concert_info SET ';
$query .= "concert_date = '{$concert_date}', ";
$query .= "concert_time = '{$concert_time}', ";
$query .= "venue = '{$venue}', ";
$query .= "headliner = '{$headliner}', ";
$query .= "supporting_act = '{$supporting_act}', ";
$query .= "entry = '{$entry}' ";
$query .= "WHERE concert_date = '{$concert_date}' ";
$query .= "AND user_id = '{$user_id}' ";
$query .= 'LIMIT 1';

$result = mysqli_query($connection, $query);
      
    if ($result) {
        // Success

        redirect_to("../index.php");

    } 
      else {
          die ("Database query failed. " . mysqli_error($connection));
    }
      
    
}
?>