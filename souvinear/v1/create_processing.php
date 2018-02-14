<?php
  require_once '../includes/initialize.php'; 
  if (isset($_POST['submit'])) {
    // form was submitted
    $username = $_POST['username'];
    $password = $_POST['password'];
//    $password-confirm = $_POST['password-confirm'];
//      
//    if ($password == $password-confirm){
          
        //encrypt password
        $hashed_password = sha1($password);

    //    $query = "SELECT id FROM users WHERE";
    //    $query .= " username = '{$username}'";

        $query = "INSERT INTO user_accounts (";
        $query .= " username, hashed_password";
        $query .= ") VALUES (";
        $query .= " '{$username}', '{$hashed_password}'";
        $query .= ")"; 

        $result = mysqli_query($connection, $query);

        if ($result) {
            // Success
             redirect_to("../index.php");
//            echo "Success!";
    //        echo "<br>";
    //        echo "<a href='index.php'>Log In</a>";
        } 
          else {
              die ("Database query failed. " . mysqli_error($connection));
        }
//    } else {
//
//        echo "passwords don't match";
//    }
      
      
   }

  
?>