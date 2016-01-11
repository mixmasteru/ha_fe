<?php
$arr = array (
    'cols' => array (
                array (
                    'id' => '',
                    'label' => 'Month',
                    'pattern' => '',
                    'type' => 'date',
                ),
                array (
                    'id' => '',
                    'label' => 'Temp',
                    'pattern' => '',
                    'type' => 'number',
                ),
                array (
                    'id' => '',
                    'label' => 'Humi',
                    'pattern' => '',
                    'type' => 'number',
                ),
        ),
    'rows' => array (
        array ('c' => array (array ('v' => 'Date(2014, 0, 1)'), array ('v' => -0.5), array ('v' => 5.7))),
        array ('c' => array (array ('v' => 'Date(2014, 1, 1)'), array ('v' => 0.4,), array ('v' => 8.69))),
        array ('c' => array (array ('v' => 'Date(2014, 2, 1)'), array ('v' => 1.4,), array ('v' => 7.69))),
        array ('c' => array (array ('v' => 'Date(2014, 3, 1)'), array ('v' => 2.4,), array ('v' => 6.69))),
        array ('c' => array (array ('v' => 'Date(2014, 4, 1)'), array ('v' => 3.4,), array ('v' => 5.69))),
        array ('c' => array (array ('v' => 'Date(2014, 5, 1)'), array ('v' => 2.4,), array ('v' => 4.69))),
        array ('c' => array (array ('v' => 'Date(2014, 6, 1)'), array ('v' => 1.4,), array ('v' => 3.69))),
        array ('c' => array (array ('v' => 'Date(2014, 7, 1)'), array ('v' => 0.4,), array ('v' => 2.69))),
        array ('c' => array (array ('v' => 'Date(2014, 8, 1)'), array ('v' => 0.4,), array ('v' => 1.69))),
    )
);
$json_example = '{"cols":[{"id":"","label":"Month","pattern":"","type":"date"},{"id":"","label":"Average Temperature","pattern":"","type":"number"},{"id":"","label":"Average Hours of Daylight","pattern":"","type":"number"}],"rows":[{"c":[{"v":"Date(2014, 0, 1)"},{"v":-0.5},{"v":5.7}]},{"c":[{"v":"Date(2014, 1, 1)"},{"v":0.4},{"v":8.7}]},{"c":[{"v":"Date(2014, 2, 1)"},{"v":0.5},{"v":12}]},{"c":[{"v":"Date(2014, 3, 1)"},{"v":2.9},{"v":15.3}]},{"c":[{"v":"Date(2014, 4, 1)"},{"v":6.3},{"v":18.6}]},{"c":[{"v":"Date(2014, 5, 1)"},{"v":9},{"v":20.9}]},{"c":[{"v":"Date(2014, 6, 1)"},{"v":10.6},{"v":19.8}]},{"c":[{"v":"Date(2014, 7, 1)"},{"v":10.3},{"v":16.6}]},{"c":[{"v":"Date(2014, 8, 1)"},{"v":7.4},{"v":13.3}]},{"c":[{"v":"Date(2014, 9, 1)"},{"v":4.4},{"v":9.9}]},{"c":[{"v":"Date(2014, 10, 1)"},{"v":1.1},{"v":6.6}]},{"c":[{"v":"Date(2014, 11, 1)"},{"v":-0.2},{"v":4.5}]}]}';


$json_temps = "[{\"date\":\"2016-01-06 16:25:12\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 16:20:06\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 16:14:57\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 16:09:49\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 16:04:39\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:59:30\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:54:20\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:49:12\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:44:02\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:38:59\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 15:33:56\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:28:46\",\"temp\":\"18.5\"},{\"date\":\"2016-01-06 15:23:36\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 15:18:27\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 15:13:18\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 15:08:08\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 15:02:59\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 14:57:55\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 14:52:46\",\"temp\":\"18.6\"},{\"date\":\"2016-01-06 14:47:36\",\"temp\":\"18.6\"}]";
$json_humis = "[{\"date\":\"2016-01-06 16:25:12\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 16:20:06\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 16:14:57\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 16:09:49\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 16:04:39\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 15:59:30\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 15:54:20\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 15:49:12\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 15:44:02\",\"humidity\":\"48\"},{\"date\":\"2016-01-06 15:38:59\",\"humidity\":\"48.1\"},{\"date\":\"2016-01-06 15:33:56\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 15:28:46\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 15:23:36\",\"humidity\":\"47.8\"},{\"date\":\"2016-01-06 15:18:27\",\"humidity\":\"47.8\"},{\"date\":\"2016-01-06 15:13:18\",\"humidity\":\"47.7\"},{\"date\":\"2016-01-06 15:08:08\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 15:02:59\",\"humidity\":\"47.9\"},{\"date\":\"2016-01-06 14:57:55\",\"humidity\":\"47.8\"},{\"date\":\"2016-01-06 14:52:46\",\"humidity\":\"47.8\"},{\"date\":\"2016-01-06 14:47:36\",\"humidity\":\"47.8\"}]";

$limit = 1000;
$auth = "";
$host  = "";
$json_temps = file_get_contents("http://".$auth.$host"/t/temps/1/0/".$limit."/");
$json_humis = file_get_contents("http://".$auth."api.bln2.de/t/humis/1/0/".$limit."/");

$arr_temps = json_decode($json_temps,true);
$arr_humis = json_decode($json_humis,true);

$arr['rows'] = array();
$cnt = count($arr_temps);
for($i = 0;$i<$cnt;$i++)
{
    $date       = strtotime($arr_temps[$i]['date'])*1000;
    //var_dump(date("Y-m-d H:i:s",$date/1000));die;
    $temp       = $arr_temps[$i]['temp'];
    $humidity   = $arr_humis[$i]['humidity'];

    $row = array ('c' => array (array ('v' => 'Date('.$date.')'),
                                array ('v' => $temp),
                                array ('v' => $humidity)));
    $arr['rows'][] = $row;
}

header('Content-Type: application/json');
//echo $json;
echo json_encode($arr);