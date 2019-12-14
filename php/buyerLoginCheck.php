<?php

session_start();

if (isset($_REQUEST['login'])) {

	$id = $_REQUEST['userName'];
	$pass = $_REQUEST['userPass'];
	$temp = "";
	$line = "";

	if(empty($id) == true || empty($pass) == true)
	{
		header('location: ../view/buyerLogin.php');
	}
	else
	{
			$myFile = fopen('../BuyerInfo.txt', 'r');
			while (!feof($myFile)) {
				$line = fgets($myFile);
				if (stristr($line, $id)) {
					break;
				}
			}
			$user = explode("|", $line);

			fclose($myFile);
			for ($i=0; $i < count($user) ; $i++) { 
				if ($id == $user[$i] && $pass == $user[$i+1]) {
					$temp = TRUE;
					setcookie('id',$user[$i],time()+(3600*60*24),"/");
					$_SESSION['Gender'] = $user[$i+6];
					$_SESSION['Pass'] = $user[$i+1];
					$_SESSION['DOB'] = $user[$i+4];
					$_SESSION['Username'] = $user[$i];
					$_SESSION['NAME'] = $user[$i+2];
					$_SESSION['EMAIL'] = $user[$i+3];
					$_SESSION['ADDRESS'] = $user[$i+5];
					$_SESSION['CONTACT'] = $user[$i+7];
					break;
				}
				else
					$temp = false;
			}

			if ($temp == TRUE) {

				header('location: ../index.php');
			}
			else
				header('location: ../view/buyerLogin.php');
	}
}

	else
		header('location: ../index.php');

?>