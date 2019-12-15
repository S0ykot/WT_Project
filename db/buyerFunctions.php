<?php
require_once('buyerDB.php');
function loginCheck($id,$pass)
{
	$conn= getConnection();
	$sql = "select * from customer_user where username='{$id}'";
	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_assoc($result);

	return $users;
}

function registration($id,$pass,$name,$email,$dob,$address,$gender,$con)
{
	$conn= getConnection();
	$sql = "insert into customer_user values ('','{$id}','{$pass}','{$name}','{$email}','{$dob}','{$gender}','{}','{$con}','{$address}','{$address}','')";
	if(mysqli_query($conn, $sql))
	{
		return true;	
	}
	else 
		return false;
}


?>