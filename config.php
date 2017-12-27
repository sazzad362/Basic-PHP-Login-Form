<?php 

	// database er sob gusti information ek jaigai rakhlam
	$host    = 'localhost';
	$db      = 'niroblogin';
	$user    = 'root';
	$pass    = '';
	$charset = 'utf8';

	// Database connection ta ekta variable er vitore rakhlam
	$dbcon = mysqli_connect("$host", "$user", "$pass", "$db");

	if (!$dbcon) {
		die("Connection failed: " . mysqli_connect_error());
	}

 ?>