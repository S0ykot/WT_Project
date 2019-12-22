<?php 
	
	session_start();
	session_destroy();
	setcookie("username", "", time()-3, "/");
	header('location: ../adminLogin.php');

 ?>