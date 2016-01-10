<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['line', 'corechart']}]}"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        google.load('visualization', '1.1', {packages: ['line', 'corechart']});
        google.setOnLoadCallback(drawChart);

        function drawChart() {
            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();

            var materialOptions = {
                chart: {
                    title: 'Room Temperature and Humidity'
                },
                width: 900,
                height: 500,
                series: {
                    // Gives each series an axis name that matches the Y-axis below.
                    0: {axis: 'Temps'},
                    1: {axis: 'Humidity'}
                },
                axes: {
                    // Adds labels to each axis; they don't have to match the axis names.
                    y: {
                        Temps: {label: 'Temps (Celsius)',maxValue: 40},
                        Humidity: {label: 'Humidity (%)'}
                    }
                }
            };

            var classicOptions = {
                title: 'Room Temperature and Humidity',
                width: 900,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                series: {
                    0: {targetAxisIndex: 0},
                    1: {targetAxisIndex: 1}
                },
                vAxes: {
                    // Adds titles to each axis.
                    0: {title: 'Temps (Celsius)', viewWindow: {min: 10, max: 40 }},
                    1: {title: 'Humidity (%)', viewWindow: { min: 0, max: 100 }}
                }
            };

            function drawMaterialChart() {
                // material:
                // var chart = new google.charts.Line(chartDiv);
                var chart = new google.visualization.LineChart(chartDiv);
                //alert(google.visualization.dataTableToCsv(data));

                var jsonData = $.ajax({
                    url: "getLineData.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //jsonData = eval(jsonData);
                //alert(data);
                // Create our data table out of JSON data loaded from server.
                var data1 = new google.visualization.DataTable(jsonData);

                chart.draw(data1, classicOptions);
            }

            drawMaterialChart();

        }

    </script>

</head>
<body>
    <br><br>
    <div id="chart_div"></div>

</body>
</html>
