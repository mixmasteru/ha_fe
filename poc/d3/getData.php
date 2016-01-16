<?php
$type = $_GET['type'];
$limit = 1;
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


if(!empty($json)) {
    $arr_data = json_decode($json, true);
    header('Content-Type: application/json');
    echo json_encode($arr_data[0][$key]);
}