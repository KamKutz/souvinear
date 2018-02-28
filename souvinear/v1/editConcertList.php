<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once("includes/initialize.php");

$url = "php://input";
$contents = file_get_contents($url); 
$contents = utf8_encode($contents); 
$postdata = json_decode($contents); 

$headliner = $postdata->{'headliner'};

$concert_date = $postdata->{'concert_date'};

$result = $connection->query("SELECT * FROM concert_info WHERE user_id = 24 AND headliner = ' {$headliner}' AND concert_date = '{$concert_date}'");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"CONCERT_DATE":"'  . $rs["concert_date"] . '",';
    $outp .= '"CONCERT_TIME":"'   . $rs["concert_time"]        . '",';
    $outp .= '"VENUE":"'   . $rs["venue"]        . '",';
    $outp .= '"HEADLINER":"'   . $rs["headliner"]        . '",';
    $outp .= '"SUPPORTING_ACT":"'   . $rs["supporting_act"]        . '",';
    $outp .= '"ENTRY":"'. $rs["entry"]     . '"}';
}
$outp ='{"entries":['.$outp.']}';
$connection->close();

echo($outp);
?>