<?php 

	// Database connect korar jonno
	include 'config.php';

	//Seasson start korar jonno 
	session_start();

	// Login from theke Login info niye aslam
	$username        = addslashes($_REQUEST['username']);
	$form_pass        = md5($_REQUEST['password']); //MD5 Hash

	// dekhi user ache kina reg kora 
	$user_check  = mysqli_query($dbcon, "SELECT * FROM users WHERE username = '$username' ");
	//User Number count korbe thakle 1 na thakle 0
	$user_check_result = mysqli_num_rows($user_check);

	if ($user_check_result == 1) {
		$logininfo = mysqli_fetch_array($user_check);
		
		// Database theke password niya aslam
		$password_db   = $logininfo['password'];

		// Akhon aita mach koramu form er password er sathe 

		if ($password_db == $form_pass) {
			$_SESSION["username"] = $logininfo['username'];
			header('location: profile.php');
		}else{
			echo "User name or password do not mach";
		}

	}else{
		echo "You are not registered";
	}
 ?>