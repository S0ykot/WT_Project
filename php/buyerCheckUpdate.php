<?php

session_start();
require_once('../db/buyerFunctions.php');
$newName = "";
$newEmail = "";
$newCon = "";
$username = "";


if (isset($_REQUEST['save'])) 
{

	function verifyEmail($myEmail,$handler)
	{
		$temp = 0;
		$array = str_split($myEmail);
		 for ($i=0; $i < count($array); $i++) { 
		 	if ($array[$i] == $handler) {
		 		$temp+=1;
		 	}
		 	else
		 		continue;
		 }

		 if ($temp==1) {
		 	return true;
		 }
		 else
		 	return false;
	}

	function verifyNumber($myNumber)
	{
		
			if (ctype_digit($myNumber) && strlen($myNumber)==11)
			{
				return true;
			}
			else
				return false;
			
	}

	function verifyName($Name)
	{
		$alphabetBox = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$nameArray = str_split($Name);
		$temp = 0;
		foreach ($nameArray as $key) {
			foreach ($alphabetBox as $alphabet) {
				if ($key == $alphabet) {
					$temp+=1;
				}
				else
					$temp=$temp;
			}
		}
		return $temp;
	}

	$username = $_SESSION['Username'];
	$newName = $_REQUEST['nameInfo'];
	$newEmail = $_REQUEST['emailInfo'];
	$newCon = $_REQUEST['conInfo'];

	if(empty($newName) == true || empty($newEmail) == true || empty($newCon) == true)
	{
		header('location: ../view/Profile/buyerContact.php');
	}
	else
	{
		if (!verifyEmail($newEmail,'@')) 
		{
			header('location: ../view/Profile/buyerContact.php');
		}
		elseif (!verifyNumber($newCon)) 
		{
			header('location: ../view/Profile/buyerContact.php');
		}
		elseif (strlen($newName)!=verifyName($newName)) {
			header('location: ../view/Profile/buyerContact.php');
		}
		else
		{
			if (verifyEmail($newEmail,'@')) 
			{
				
				$data = explode("@", $newEmail);

				if (!verifyEmail($data[1], '.')) 
				{
					header('location: ../view/Profile/buyerContact.php');
				}
				else
				{
					$update = updateInfo($username,$newName,$newEmail,$newCon);

					header('location: buyerLogoutCheck.php');
				}
			}
			else
				header('location: ../view/Profile/buyerContact.php');

		}
	}
}
else
				header('location: ../index.php')
?>