<?php
$server="mysql_db";
$username="root";//THE DEFAULT USERNAME OF THE DATABASE
$password="root";
$dbname="eleccare";
$con =new mysqli('mysql_db','root','root','eleccare');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if (isset($_GET["Relay_ID"])) {
  $relay_id = $_GET["Relay_ID"];
  $sql="SELECT Status from relay where Relay_ID = $relay_id";
  $result = mysqli_query($con,$sql);
  if ($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {    
      echo  $row["Status"];
    }
  } else {
    echo "Error: " . mysqli_error($con);
  }
} else {
  echo "Error: Relay ID not provided.";
}
?>
