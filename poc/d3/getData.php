<?php
$limit = 1;
$auth = "";
$host  = "";
$json_temps = file_get_contents("http://".$auth.$host."/t/temps/1/0/".$limit."/");
//$json_humis = file_get_contents("http://".$auth."api.bln2.de/t/humis/1/0/".$limit."/");

$arr_temps = json_decode($json_temps,true);

header('Content-Type: application/json');
echo json_encode($arr_temps[0]['temp']);