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

	function getUserLastId(){

		$conn = getConnection();
		$sql = "select max(id) as 'id' from system_user";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);

		return $data;
	}

	function verifyEmail($email,$key){
		$flag = 0;
		$splitEmail = str_split($email);
		 for ($i=0; $i < count($splitEmail); $i++) { 
		 	if ($splitEmail[$i] == $key) {
		 		$flag += 1;
		 	}
		 	else
		 		continue;
		 }
		 if ($flag == 1) {
		 	return true;
		 }
		 else
		 	return false;
	}

	function UserAdd($uname,$pass,$email,$ufullname,$newname,$utype,$time){

		$conn = getConnection();
		$sql = "insert into system_user values ('','{$uname}','{$pass}','{$email}','{$ufullname}','{$newname}','{$utype}','{$time}')";
		if (mysqli_query($conn,$sql)) {
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from system_user";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function validUName($name)
	{
		$letter = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
		$nameSplit = str_split($name);
		$flag = 0;
		foreach ($nameSplit as $key) {
			foreach ($letter as $c) {
				if ($key == $c) {
					$flag += 1;
				}
			}
		}
		return $flag;
	}

	function validUserName($name)
	{
		$letter = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','-','.');
		$nameSplit = str_split($name);
		$flag = 0;
		foreach ($nameSplit as $key) {
			foreach ($letter as $c) {
				if ($key == $c) {
					$flag+=1;
				}
			}
		}
		return $flag;
	}

	function getUserDetails(){

		$conn = getConnection();
		$sql = "select system_user.id,system_user.username,system_user.email,system_user.fullname,system_user.image,emp_type.type from system_user,emp_type where system_user.eid=emp_type.eid order by system_user.id asc";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function deleteUser($id){

		$conn = getConnection();
		$sql = "delete from system_user where id = '{$id}'";
		if (mysqli_query($conn,$sql)) {
			return true;
		}else{
			return false;
		}
	}

	function getSearchUser($key){

		$conn = getConnection();
		$sql = "select system_user.id,system_user.username,system_user.email,system_user.fullname,system_user.image,emp_type.type from system_user,emp_type where system_user.eid=emp_type.eid and (system_user.fullname like '{$key}%' or system_user.email like '{$key}%' or emp_type.type like '{$key}%')";
		$result = mysqli_query($conn,$sql);

		return $result;	
	}
 ?>