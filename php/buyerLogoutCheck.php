<?php

	session_start();
	if (isset($_SESSION['NAME'])) {
		
		session_destroy();
		setcookie('id',$user[$i],time()-1,"/");
		header('location: ../index.php');
	}
	else
		header('location: ../index.php');
	
?>

