<?php

session_start();
require_once 'SellerDB.php';

function auth_check($uname,$pass)
{
	$conn = getConnection();
	$query="SELECT * FROM system_user WHERE username='{$uname}' AND password='{$pass}' AND eid=2;";
	$result = mysqli_query($conn,$query);
	$row= mysqli_fetch_assoc($result);
	
	if ($row['username']==$uname AND $row['password']==$pass) {
		$_SESSION['ID'] = $row['id'];
		$_SESSION['name'] = $row['username'];
		$_SESSION['type']=2;
		date_default_timezone_set("Asia/Dhaka");
		$_SESSION['time']=date("h:i:sa");
		return TRUE;
	}
	else
	{
		return FALSE;
	}

}


function product_details()
{
	$conn = getConnection();
	$query="SELECT * from product";
	$result = mysqli_query($conn,$query);
	return $result ;
}


function product_search($search)
{
	$conn = getConnection();
	$query="SELECT * from product where name like '%$search%'";
	$result = mysqli_query($conn,$query);
	return $result ;
}




function profile($id)
{
	$conn = getConnection();
	$query="SELECT * from system_user where id=$id;";
	$result = mysqli_query($conn,$query);
	return $result ;
}


function updateProfile($fullname,$username,$email,$image)
{
	$conn = getConnection();
	$query="UPDATE system_user SET fullname='$fullname',image='$image',email='$email' WHERE username='$username'";
	if (mysqli_query($conn,$query)) {
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

function updatePassword($newPass,$id)
{
	$conn = getConnection();
	date_default_timezone_set("Asia/Dhaka");
	$time =date("Y-m-d".' (h:i:s A)');
	$query="UPDATE system_user SET password='$newPass', last_update='$time' WHERE id=$id";
	if (mysqli_query($conn,$query)) {
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}




?>




