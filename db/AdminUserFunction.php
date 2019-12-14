<?php 

	require_once('adminDB.php');

	function validUser($uname, $password){

		$conn = getConnection();
		
		$sql = "select * from system_user where username='{$uname}' and password='{$password}' and eid = 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if ($user['username'] == $uname && $user['password'] == $password){
			return true;
		}else{
			return false;
		} 
			
		
	}

 ?>