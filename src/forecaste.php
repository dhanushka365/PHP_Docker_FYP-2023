<?php 
		include('connect/connection.php');
?>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!Doctype HTML>
<html>

<head>
    <!-- <meta http-equiv="refresh" content="10" ; url="<?php echo $_SERVER['PHP_SELF']; ?>"> -->
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="col-div-10">
            <div class="box-8">
                <!-- <div class="content-box"> -->
                <!-- <div class="container">
                    <h1>Live Energy consumption and Forcasting</h1> -->
                <div>
                    <canvas id="canvas"></canvas>
                    <button onclick="updateChart()">Fetch</button>
                </div>
            </div>
        </div>
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


</html><?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>