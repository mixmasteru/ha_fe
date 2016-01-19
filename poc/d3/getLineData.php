<?php
include 'auth.php';

$type = $_GET['type'];
$limit = 1000;
$key = "";

if($type === "temp") {
    $json = file_get_contents("http://".$auth.$host."/t/temps/1/0/" . $limit . "/");
    $key = "temp";
}
elseif($type === "humi") {
    $json = file_get_contents("http://".$auth.$host."/t/humis/1/0/".$limit."/");
    $key = "humidity";
}

$arr_data = json_decode($json, true);
$str_out = "";

header('Content-Type: application/text');
echo "date\t".$key."\thumi"."\n";
foreach ($arr_data as $arr_item) {
    echo date("M-d-Y-H-i-s",strtotime($arr_item['date']))."\t".$arr_item[$key]."\t"."40"."\n";
}
