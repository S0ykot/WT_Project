<?php

session_start();

$newAddress = "";



if (isset($_REQUEST['change'])) 
{


	$username = $_SESSION['Username'];
	$newAddress = $_REQUEST['address'];
	
	if(empty($newAddress) == true)
	{
		header('location: ../../view/Profile/buyerChangeAddress.php');
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
							$line = $username."|".$_SESSION['Pass']."|".$_SESSION['NAME']."|".$_SESSION['EMAIL']."|".$_SESSION['DOB']."|".$newAddress."|".$_SESSION['Gender']."|".$_SESSION['CONTACT'];
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