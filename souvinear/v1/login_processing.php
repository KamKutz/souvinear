<?php

  require_once("includes/initialize.php");

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $username = $request->username;
    $pass = $request->pass;

    
    $hashed_password = sha1($pass);
      
    $query = "SELECT * FROM user_accounts WHERE";
    $query .= " username = '{$username}'";
    $query .= " AND hashed_password = '{$hashed_password}'";
    $query .= " LIMIT 1";
    
    $result = mysqli_query($connection, $query);
    
    $row = mysqli_fetch_assoc($result);
      
    $user_id = $row['id'];
//    echo $user_id;

    $_SESSION['user'] = $user_id;
    echo $_SESSION['user'];

?>