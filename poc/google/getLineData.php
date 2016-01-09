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



$json = '{"cols":[{"id":"","label":"Month","pattern":"","type":"date"},{"id":"","label":"Average Temperature","pattern":"","type":"number"},{"id":"","label":"Average Hours of Daylight","pattern":"","type":"number"}],"rows":[{"c":[{"v":"Date(2014, 0, 1)"},{"v":-0.5},{"v":5.7}]},{"c":[{"v":"Date(2014, 1, 1)"},{"v":0.4},{"v":8.7}]},{"c":[{"v":"Date(2014, 2, 1)"},{"v":0.5},{"v":12}]},{"c":[{"v":"Date(2014, 3, 1)"},{"v":2.9},{"v":15.3}]},{"c":[{"v":"Date(2014, 4, 1)"},{"v":6.3},{"v":18.6}]},{"c":[{"v":"Date(2014, 5, 1)"},{"v":9},{"v":20.9}]},{"c":[{"v":"Date(2014, 6, 1)"},{"v":10.6},{"v":19.8}]},{"c":[{"v":"Date(2014, 7, 1)"},{"v":10.3},{"v":16.6}]},{"c":[{"v":"Date(2014, 8, 1)"},{"v":7.4},{"v":13.3}]},{"c":[{"v":"Date(2014, 9, 1)"},{"v":4.4},{"v":9.9}]},{"c":[{"v":"Date(2014, 10, 1)"},{"v":1.1},{"v":6.6}]},{"c":[{"v":"Date(2014, 11, 1)"},{"v":-0.2},{"v":4.5}]}]}';


header('Content-Type: application/json');
//echo $json;
echo json_encode($arr);