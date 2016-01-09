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
            data.addColumn('date', 'Month');
            data.addColumn('number', "Average Temperature");
            data.addColumn('number', "Average Hours of Daylight");

            data.addRows([
                [new Date(2014, 0),  -.5,  5.7],
                [new Date(2014, 1),   .4,  8.7],
                [new Date(2014, 2),   .5,   12],
                [new Date(2014, 3),  2.9, 15.3],
                [new Date(2014, 4),  6.3, 18.6],
                [new Date(2014, 5),    9, 20.9],
                [new Date(2014, 6), 10.6, 19.8],
                [new Date(2014, 7), 10.3, 16.6],
                [new Date(2014, 8),  7.4, 13.3],
                [new Date(2014, 9),  4.4,  9.9],
                [new Date(2014, 10), 1.1,  6.6],
                [new Date(2014, 11), -.2,  4.5]
            ]);

            //alert(data.toJSON());

            var materialOptions = {
                chart: {
                    title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
                },
                width: 900,
                height: 500,
                series: {
                    // Gives each series an axis name that matches the Y-axis below.
                    0: {axis: 'Temps'},
                    1: {axis: 'Daylight'}
                },
                axes: {
                    // Adds labels to each axis; they don't have to match the axis names.
                    y: {
                        Temps: {label: 'Temps (Celsius)'},
                        Daylight: {label: 'Daylight'}
                    }
                }
            };

            function drawMaterialChart() {
                var materialChart = new google.charts.Line(chartDiv);
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

                materialChart.draw(data1, materialOptions);
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
