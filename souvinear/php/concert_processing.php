<?php
  require_once '../includes/initialize.php'; 

  if (isset($_POST['submit'])) {
    // form was submitted
          
    $user_id = $_SESSION['user'];
    $headliner = $_POST['headliner'];
    $supporting_act = $_POST['supporting_act'];
    $venue = $_POST['venue'];
    $concert_date = $_POST['concert_date'];
    $concert_time = $_POST['concert_time'];
    $entry = $_POST['entry'];
      
      echo $user_id;
      
    $query = "INSERT INTO concert_info (";
    $query .= " user_id, concert_date, concert_time, venue, headliner, supporting_act, entry";
    $query .= ") VALUES (";
    $query .= " '{$user_id}', '{$concert_date}', '{$concert_time}', '{$venue}', '{$headliner}', '{$supporting_act}', '{$entry}'";
    $query .= ")"; 
      
    $result = mysqli_query($connection, $query);
      
    if ($result) {
        // Success
        echo '<script language="javascript">';
        echo 'alert("Concert Added!")';
        echo '</script>';
        redirect_to("../index.php");

    } 
      else {
          die ("Database query failed. " . mysqli_error($connection));
    }
            
  }

  
?>