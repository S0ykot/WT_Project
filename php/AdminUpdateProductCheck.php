<?php
	require_once('../db/AdminProductFunction.php');

	$pname1 = "";
	$cat1 = "";
	$subcat1 = "";
	$quan1 = "";
	$buy1 = "";
	$sell1 = "";
	$date1 = "";
	$des1 = "";
	$activity1 = "";
	$rname1 = "";

	

	if (isset($_POST['submit'])) {
		$pname1 = $_POST['pname1'];
		$cat1 = $_POST['pcat1'];
		$subcat1 = $_POST['subcat1'];
		$quan1 = $_POST['quantity1'];
		$buy1 = $_POST['buyprice1'];
		$sell1 = $_POST['sellprice1'];
		$date1 = $_POST['incomedate1'];
		$des1 = $_POST['describe1'];
		$activity1 = $_POST['act1'];

		$length1 = validName($pname1);

		if (empty($pname1) || empty($cat1) || empty($subcat1) || empty($quan1) ||empty($buy1) || empty($sell1) || empty($date1) || empty($des1) || empty($activity1) || empty($_FILES['pimage1']['name'])) {
			
			echo '<script type="text/javascript">alert("'.$_FILES['pimage1']['name'].'");</script>';
		}else if (strlen($pname1) != $length1) {
			echo "<script> alert('Product name not valid'); </script>";
		}elseif (strpos($des1, '.') == false) {
			echo "<script> alert('Give fullstop after each line'); </script>";
		}else{

				$dir1 ="../upload/";
				$name1 =$_FILES['pimage1']['tmp_name'];
				$rname1 = $_FILES['pimage1']['name'];
				$ext1 = explode('.', $rname1);
				$newname1= uniqid().'.'.$ext1[1];
				move_uploaded_file($name1, $dir1.$newname1);

				if ($activity1 == "Available") {
					
					$finalAct1 = 1;
				}else{
					$finalAct1 = 0;
				}
			

			$status1 = productUpdate($_SESSION['pid'],$pname1,$subcat1,$quan1,$buy1,$sell1,$date1,$des1,$finalAct1,$newname1);

			if ($status1) {
				header('location: ../view/AdminProductDetails.php?msg=Updating successfull');
			}else{
				header('location: ../view/AdminProductDetails.php?msg=Updating error');
			}

		}	
	}else{
		header('location: ../adminLogin.php');
	}

?>