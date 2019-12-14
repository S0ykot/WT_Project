<?php 

session_start();
require_once '../db/SellerFunctions.php';



if (isset($_POST['update'])) {
	$np = $_POST['npass'];
	$cnp = $_POST['cnpass'];
	$cp = $_POST['cpass'];

	$data = profile($_SESSION['ID']);

	$row = mysqli_fetch_assoc($data);


	if (empty($np) OR empty($cnp) OR empty($cp)) {
		header('Location:../view/SellerPasswordChange.php?msg=null submission');
	}
	else
	{
		if ($np!=$cnp) {
			header("Location:../view/SellerPasswordChange.php?msg=Current password didn't match");
		}
		else
		{
			if ($cp!=$row['password']) {
			header('Location:../view/SellerPasswordChange.php?msg=Wrong current password');
		}
			else
			{
				$result = updatePassword($np,$_SESSION['ID']);
			}
		}
	}


	if ($result) {
		header('Location:../ControlPanel.php?msg=update success. Login with your new password');
		session_destroy();
	}
	else
	{
		header('Location:../view/SellerPasswordChange.php?msg=update failed');
	}
}





 ?>