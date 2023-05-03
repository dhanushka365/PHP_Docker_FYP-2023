<?php
// Connect to the database
$host = "mysql_db";
$user = "root";
$password = "root";
$dbname = "eleccare";

// Connect to the database
$conn1 = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the data
$sql1 = "SELECT time, voltage FROM elec_usage";
$result1 = mysqli_query($conn1, $sql1);

// Store the data in arrays
$data1 = array();
$data2 = array();
while ($row = mysqli_fetch_array($result1)) {
    $data1[] = $row['time'];
    $data2[] = $row['voltage'];
}

// Close the connection
mysqli_close($conn1);
?>