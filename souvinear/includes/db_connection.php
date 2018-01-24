<?php

      define('DB_SERVER', 'localhost');
      define('DB_USER', 'root');
      define('DB_PASS', 'root');
      define('DB_NAME', 'souvinear_db');

      $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

      if (mysqli_connect_errno()) {
        die ('Database connection failed: ' .
            mysqli_connect_error() .
            ' )' . mysqli_connect_errno() . ')'
        );
      }
?>


<!-- Download SQL pro, get export database csv and create database myself DB name then import info into database 
 -->

<!-- Log in to the FTP make changes locally to file all be on your server  -->