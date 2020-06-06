<?php
	session_start();
	// connect to database
	$servername = "localhost";
    $dbname = "u181658000_gyantu";
    $username = "u181658000_gyantu";
    $password = "APgp@112233";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://gyantu.com/blog/');
?>
