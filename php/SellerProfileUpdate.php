<?php

session_start();
require_once '../db/SellerFunctions.php';

if (isset($_POST['update'])) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$cpass = $_POST['pass'];
	$pImg = $_FILES['profile'];
	$ext = pathinfo($pImg['name'], PATHINFO_EXTENSION);
	$file = rand().'.'.$ext;

	if ($pImg['name']=="") {
			$pImg = $_SESSION['img'];
	}
	else
	{
		$pImg = $file;
	}




	if (empty($fullname) OR empty($email) OR empty($cpass)) {
		echo "<script>alert('Null submission')</script>";
				echo "<script>window.location='../view/SellerHome.php#profile';</script>";
	}
	else
	{		
		if ($cpass!=$_SESSION['pass']) {
				echo "<script>alert('Current password not matching')</script>";
				echo "<script>window.location='../view/SellerHome.php#profile';</script>";
			}
			else{
				if ((pathinfo($pImg, PATHINFO_EXTENSION) == "gif") OR (pathinfo($pImg, PATHINFO_EXTENSION) == "jpg") OR (pathinfo($pImg, PATHINFO_EXTENSION) == "png") OR (pathinfo($pImg, PATHINFO_EXTENSION) == "jpge")) 
				{
					$result = updateProfile($fullname,$_SESSION['name'],$email,$pImg);

					if ($result) {
						if ($_FILES['profile']['name']) {
							$dir = '../upload/'.$pImg;
							$x = move_uploaded_file($_FILES['profile']['tmp_name'], $dir);
							if ($x) {
								echo "<script>alert('Profile updated')</script>";
								echo "<script>window.location='../view/SellerHome.php#profile';</script>";
							}
							else
							{
								echo "<script>alert('Profile updated')</script>";
								echo "<script>window.location='../view/SellerHome.php#profile';</script>";
							}
						}
						else
						{
							echo "<script>alert('Profile updated')</script>";
							echo "<script>window.location='../view/SellerHome.php#profile';</script>";
							//header('Location:../view/SellerHome.php#profile');
						}
					}
					else
					{
						echo "<script>alert('Something wrong')</script>";
						header('Location:../view/SellerProfileEdit.php?msg=Something Wrong');
					}

					
				}
				else
				{
					echo "<script>alert('13')</script>";
					header('Location:../view/SellerProfileEdit.php?msg=invalid file type');
				}
				
			}	
	}


}


?>