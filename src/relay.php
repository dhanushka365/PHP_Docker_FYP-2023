<?php
// Connect to database
$con = mysqli_connect("mysql_db", "root", "root", "eleccare");

// Get all the courses from courses table
// execute the query
// Store the result
$sql = "SELECT * FROM `relay`";
$Sql_query = mysqli_query($con, $sql);
$All_relay = mysqli_fetch_all($Sql_query, MYSQLI_ASSOC);

include('connect/connection.php');

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="10" ; url="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Using internal/embedded css -->
    <style>
    .stretch-div {
        height: 100%;
        width: 100%;
        position: absolute;
    }

    .btn {
        background-color: red;
        border: none;
        color: white;
        padding: 5px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 20px;
    }

    .green {
        background-color: #199319;
    }

    .red {
        background-color: red;
    }

    table,
    th {
        border-style: solid;
        border-width: 1;
        text-align: center;
    }

    td {
        text-align: center;
    }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>E</span>LECCARE-0.1</p>
        <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Users</a>
        <a href="relay.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Devices</a>
        <a href="device_details.php" class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Details</a>
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
                    <p><?php echo $_SESSION['name']; ?> <span>Software Engineer</span></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <main>
            <div class="container-fluid">
                <div style="height: 800px; width: 1200px; margin-left: 100px; overflow: auto;">
                    <table style="margin: 0 auto; display: table; width: 1000px; height: 80px; overflow: auto;">
                        <!-- TABLE TOP ROW HEADINGS-->
                        <tr>
                            <th>Relay Id</th>
                            <th>Device Name</th>
                            <th>Status</th>
                            <th>Control</th>
                        </tr>
                        <?php
                // Use foreach to access all the courses data
                foreach ($All_relay as $relay) { ?>
                        <tr>
                            <td><?php echo $relay['Relay_ID']; ?></td>
                            <td><?php echo $relay['Relay_Type']; ?></td>
                            <td><?php
                        if ($relay['Status'] == "1")
                            echo "Active";
                        else
                            echo "Inactive";
                        ?>
                            </td>
                            <td>
                                <?php
                        if ($relay['Status'] == "1")
                            echo "<a href=deactivate.php?Relay_ID=" . $relay['Relay_ID'] . " class='btn red'>Ativate</a>";
                        else
                            echo "<a href=activate.php?Relay_ID=" . $relay['Relay_ID'] . " class='btn green'>Deactivate</a>";
                        ?>
                            </td>
                        </tr>
                        <?php
                }
                // End the foreach loop
                ?>
                    </table>
                </div>
            </div>
        </main>


    </div>
    </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
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
<?php
} else {
    header("Location: index.php");
    exit();
}
?>