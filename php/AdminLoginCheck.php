<?php
	require_once('AdminUserFunction.php');
	session_start();

	if (isset($_POST['submit'])) {
		$uname = $_POST['username'];
		$pass = $_POST['password'];

		if(empty($uname) == true || empty($pass) == true){
			header('location: ../index.php?msg=Please Fill Data');
			//echo "<script> document.getElementById('er').innerHTML = "Empty"; </script>";
			
		}else{

			if(validUser($uname, $pass)){
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $pass;

				header('location: ../view/AdminHome.php');

			}else{
				header('location: ../index.php?msg=Invalid Username/Password');
				//echo "<script> alert('Invalid Username/Password'); </script>";
			}
		}
		
	}else{
		header('location: ../index.php');
	}

?>