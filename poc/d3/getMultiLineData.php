<?php
include 'auth.php';

$type = $_GET['type'];
$limit = 2000;
$key = "";


$json1 = file_get_contents("http://".$auth.$host."/t/temps/1/0/" . $limit . "/");
$key1 = "temp";
$json2 = file_get_contents("http://".$auth.$host."/t/humis/1/0/".$limit."/");
$key2 = "humidity";

$arr_data1 = json_decode($json1, true);
$arr_data2 = json_decode($json2, true);
$str_out = "";

header('Content-Type: application/text');
echo "date\t".$key1."\t"."humi"."\n";
$cnt = count($arr_data1);
for($i=0;$i<$cnt;$i++){
    echo date("M-d-Y-H-i-s",strtotime($arr_data1[$i]['date']))."\t".$arr_data1[$i][$key1]."\t".$arr_data2[$i][$key2]."\n";
}