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

function updatePass($username,$newPass)
{
	$conn= getConnection();
	$sql = "update customer_user set password='{$newPass}' where username='{$username}'";
	if(mysqli_query($conn, $sql))
	{
		return true;	
	}
	else 
		return false;
}

function updateAddress($username,$newAddress)
{
	$conn= getConnection();
	$sql = "update customer_user set billing_address='{$newAddress}',shipping_address='{$newAddress}' where username='{$username}'";
	if(mysqli_query($conn, $sql))
	{
		return true;	
	}
	else 
		return false;
}

function updateInfo($username,$newName,$newEmail,$newCon)
{
	$conn= getConnection();
	$sql = "update customer_user set fullname='{$newName}',email='{$newEmail}',phone='{$newCon}' where username='{$username}'";
	if(mysqli_query($conn, $sql))
	{
		return true;	
	}
	else 
		return false;
}


function getSubCats($Cat)
{
	$conn = getConnection();
	$sql1 = "select cat_id from category where cat_name='{$Cat}'";
	$result1 = mysqli_query($conn, $sql1);
	$list = mysqli_fetch_assoc($result1);
	$sql = "select subcat_name from subcategory where cat_id='{$list["cat_id"]}'";
	$result = mysqli_query($conn, $sql);
	//$lists[]=array();
	while($getResult = mysqli_fetch_assoc($result))
	{
		$lists[]=$getResult;
	}
	return $lists;
	
}

function getProductLists($Cat)
{
	$conn = getConnection();
	$sql1 = "select subcat_id from subcategory where subcat_name='{$Cat}'";
	$result1 = mysqli_query($conn, $sql1);
	$list = mysqli_fetch_assoc($result1);
	$sql = "select * from product where subcat_id='{$list["subcat_id"]}'";
	$result = mysqli_query($conn, $sql);
	//$lists[]=array();
	while($getResult = mysqli_fetch_assoc($result))
	{
		$lists[]=$getResult;
	}
	return $lists;
}

function getProduct($Product)
{
	$conn = getConnection();
	$sql = "select * from product where name='{$Product}'";
	$result = mysqli_query($conn, $sql);
	while($getResult = mysqli_fetch_assoc($result))
	{
		$lists[]=$getResult;
	}
	return $lists;
}