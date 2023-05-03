<?php

$sname= "mysql_db";
$unmae= "root";
$password = "root";

$db_name = "eleccare";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}