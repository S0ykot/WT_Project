<?php

session_start();

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
		$file = "../../BuyerInfo.txt";

					$read = fopen($file, 'r');
					$write = fopen('$file.tmp', 'w');

					$replaced = false;

					while(!feof($read))
					{
						$line = fgets($read);
						if (stristr($line, $username)) {
							$line = $username."|".$newPass."|".$_SESSION['NAME']."|".$_SESSION['EMAIL']."|".$_SESSION['DOB']."|".$_SESSION['ADDRESS']."|".$_SESSION['Gender']."|".$_SESSION['CONTACT'];
							$replaced = true;
						}
						fwrite($write,$line);
					}

					fclose($read);
					fclose($write);

					if ($replaced) {
						rename('$file.tmp', $file);
					}
					else
						{unlink('$file.tmp');}

					header('location: ../buyerLogoutCheck.php');
	}
}
else
	header('location: ../../index.php')
?>