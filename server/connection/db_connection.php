<?php

$sname= "localhost";
// 192.168.4.100
$unmae= "root";
$password = "@#trikee2023";

$db_name = "rebs_db";

$connection = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$connection) {
	echo "Sorry Connection failed!";
}
?>