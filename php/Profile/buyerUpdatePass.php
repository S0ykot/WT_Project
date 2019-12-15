<?php

session_start();
require_once('../../db/buyerFunctions.php');
$oldPass = "";
$newPass = "";
$conNewPass = "";

if (isset($_REQUEST['savepass'])) 
{


	$username = $_SESSION['Username'];
	$oldPass = $_REQUEST['oldpass'];
	$newPass = $_REQUEST['newpass'];
	$conNewPass = $_REQUEST['connewpass'];
	
	if(empty($oldPass) == true || empty($newPass) == true || empty($conNewPass) == true)
	{
		header('location: ../../view/Profile/buyerChangePass.php');
	}
	elseif($oldPass!=$_SESSION['Pass'])
	{
		header('location: ../../view/Profile/buyerChangePass.php');
	}
	elseif ($newPass!=$conNewPass) 
	{
		header('location: ../../view/Profile/buyerChangePass.php');
	}
	else
	{
		$update = updatePass($username,$newPass);
					
		header('location: ../buyerLogoutCheck.php');
	}
}
else
	header('location: ../../index.php')
?>