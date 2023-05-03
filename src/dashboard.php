<?php 
		include('connect/connection.php');
?>
<!Doctype HTML>
<html>

<head>
    <meta http-equiv="refresh" content="1" ; url="<?php echo $_SERVER['PHP_SELF']; ?>">
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
        <a href="device_details.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Details</a>
        <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Scheduling</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Forecasting</a>
        <a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a>
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

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p><?php echo $row['voltage'] ?><br /><span>Voltage</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p><?php echo $row['power']?><br /><span>Power</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p><?php echo $row['current'] ?><br /><span>Current</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p><?php echo $row['energy'] ?><br /><span>Energy</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />
        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Mian Meter Readings<span>Sell All</span></p>
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>Account No</th>
                                <th>Voltage</th>
                                <th>Current</th>
                                <th>Power</th>
                                <th>Energy</th>
                                <th>Frequency</th>
                                <th>PF</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
            $servername = "mysql_db";
            $username = "root";
            $password = "root";
            $database = "eleccare";

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("connect failed:" . $connection->connect_error);
            }

            $sql = "SELECT * FROM elec_usage ORDER BY date DESC, time DESC LIMIT 4";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query:" . $connection->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr";

                if ($row["voltage"] > 240) {
                  echo " style='background-color: rgba(255, 0, 0, 0.5);'";
              }
              
                echo ">
                    <td>" . $row["account_no"] . "</td>
                    <td>" . $row["voltage"] . "</td>
                    <td>" . $row["current"] . "</td>
                    <td>" . $row["power"] . "</td>
                    <td>" . $row["energy"] . "</td>
                    <td>" . $row["frequency"] . "</td>
                    <td>" . $row["pf"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>" . $row["time"] . "</td>
                </tr>";
            }
        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Total Sale <span>Sell All</span></p>

                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <br /><br />
        <div class="col-div-10">
            <div class="box-8">
                <div class="content-box">


                </div>
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