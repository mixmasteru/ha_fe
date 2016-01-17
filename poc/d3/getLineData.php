<?php
$type = $_GET['type'];
$limit = 100;
$auth = "";
$host  = "";
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
echo "date\t".$key."\n";
foreach ($arr_data as $arr_item) {
    echo strtotime($arr_item['date'])."\t".$arr_item[$key]."\n";
}
