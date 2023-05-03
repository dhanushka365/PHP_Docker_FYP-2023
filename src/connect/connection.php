<?php
// Connect to the database
$servername = "mysql_db";
$username = "root";
$password = "root";
$dbname = "eleccare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the last row from the database
$sql = "SELECT * from elec_usage ORDER BY date DESC, time DESC LIMIT 1";
$result = $conn->query($sql);

// Fetch the data from the result
$row = $result->fetch_assoc();

// Close the database connection
$conn->close();
?>
