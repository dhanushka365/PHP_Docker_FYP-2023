<?php

// Connect to database
$con = mysqli_connect("mysql_db", "root", "root", "eleccare");

// Check if id is set or not if true toggle,
// else simply go back to the page
if (isset($_GET['Relay_ID'])) {

	// Store the value from get to a
	// local variable "course_id"
	$relay_id = $_GET['Relay_ID'];

	// SQL query that sets the status
	// to 1 to indicate activation.
	$sql = "UPDATE `relay` SET
			`status`=1 WHERE Relay_ID='$relay_id'";

	// Execute the query
	mysqli_query($con, $sql);
}

// Go back to course-page.php
header('location: relay.php');