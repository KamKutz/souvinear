<?php

  require_once("../includes/initialize.php");
  if (isset($_POST['submit'])) {
    // form was submitted
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $hashed_password = sha1($password);
      
    $query = "SELECT * FROM user_accounts WHERE";
    $query .= " username = '{$username}'";
    $query .= " AND hashed_password = '{$hashed_password}'";
    $query .= " LIMIT 1";
    
    $result = mysqli_query($connection, $query);
    
    $row = mysqli_fetch_assoc($result);
      
    $user_id = $row['id'];
    echo $user_id;

    $_SESSION['user'] = $user_id;
    echo $_SESSION['user'];
      
    if (($result->num_rows)== 1) {

        redirect_to("../index.php");
//        echo "Success!";
    }
    else {
      // unsuccessful login
        redirect_to("./wrong.php");
//        echo "unsuccessful!";
    }
  }

?>