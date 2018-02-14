<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

  require_once '../includes/initialize.php'; 

    //get data from add-entry.html & addCtrl.js
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

          
    $user_id = "24";
    $headliner = $request->headliner;
    $supporting_act = $request->supporting_act;
    $venue = $request->supporting_act;
    $concert_date = $request->concert_date;
    $concert_time = $request->concert_time;
    $entry = $request->concert_entry;
      
      echo $user_id;
      
    $query = "INSERT INTO concert_info (";
    $query .= " user_id, concert_date, concert_time, venue, headliner, supporting_act, entry";
    $query .= ") VALUES (";
    $query .= " '{$user_id}', '{$concert_date}', '{$concert_time}', '{$venue}', '{$headliner}', '{$supporting_act}', '{$entry}'";
    $query .= ")"; 
      
    $result = mysqli_query($connection, $query);
  
?>