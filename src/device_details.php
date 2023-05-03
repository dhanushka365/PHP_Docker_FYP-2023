<?php 
		include('connect/chartsdb.php');
?>
<!Doctype HTML>
<html>

<head>
    <meta http-equiv="refresh" content="1" ; url="<?php echo $_SERVER['PHP_SELF']; ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['time', 'voltage'],
            <?php
                for ($i = 0; $i < count($data1); $i++) {
                    echo "['" . $data1[$i] . "', " . $data2[$i] . "],";
                }
                ?>
        ]);

        var options = {
            title: 'Line Chart',
            curveType: 'function',
            legend: {
                position: 'bottom',
                textStyle: {
                    color: 'grey',
                    fontSize: 14
                }
            },
            backgroundColor: {
                fill: '#f8f8f8'
            },
            chartArea: {
                backgroundColor: {
                    fill: '#f8f8f8'
                },
            },
            colors: ['#008CBA'],
            pointSize: 3,
            lineWidth: 1,
            height: 500

        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
    </script>
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>E</span>LECCARE-0.1</p>
        <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
        <a href="#" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Devices</a>
        <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Details</a>
        <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Scheduling</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Forecasting</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
        <a href="logout.php" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Logout</a>
    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">

                    <img src="images/approved-profile-icon.png" class="pro-img" />
                    <p>Pasindu Uduwela <span>Software Engineer</span></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <br />
        <div class="clearfix"></div>
        <div class="clearfix"></div>

        <br /><br />
        <div class="col-div-12">
            <div class="box-12">
                <div id="curve_chart" class="chart"></div>
            </div>



            <div class=" clearfix"></div>
            <br /><br />
            <div class="col-div-10">
                <div class="box-8">
                    <div id="curve_chart" style="width: 900px; height: 500px"></div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(".nav").click(function() {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function() {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });
        </script>

</body>


</html>