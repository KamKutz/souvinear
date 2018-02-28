<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

   require_once 'includes/initialize.php'; 

    //get data from add-entry.html & addCtrl.js

    $url = "php://input";
    $contents = file_get_contents($url); 
    $contents = utf8_encode($contents); 
    $postdata = json_decode($contents); 

    $user_id = "24";
    $headliner = $postdata->{'headliner'};
    $supporting_act = $postdata->{'supporting_act'};
    $venue = $postdata->{'venue'};
    $concert_date = $postdata->{'concert_date'};
    $concert_time = $postdata->{'concert_time'};
    $entry = $postdata->{'entry'};

     echo var_dump($postdata);

      echo $venue;

    $query = "INSERT INTO concert_info (";
    $query .= " user_id, concert_date, concert_time, venue, headliner, supporting_act, entry";
    $query .= ") VALUES (";
    $query .= " '{$user_id}', '{$concert_date}', '{$concert_time}', '{$venue}', '{$headliner}', '{$supporting_act}', '{$entry}'";
    $query .= ")"; 
      
    $result = mysqli_query($connection, $query);

?>