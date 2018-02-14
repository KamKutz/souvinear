<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once("includes/initialize.php");

$result = $connection->query("SELECT * FROM concert_info WHERE user_id = 24 ORDER BY concert_date ASC");

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