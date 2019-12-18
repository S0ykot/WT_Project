<?php
	require_once('../db/AdminProductFunction.php');

	$uppname = "";
	$uppcat = "";
	$uppsubcat = "";
	$uppquan = "";
	$uppbuy = "";
	$uppsell = "";
	$uppdate = "";
	$uppdes = "";
	$uppactivity = "";
	$upprname = "";

	

	if (isset($_POST['submit'])) {
		$uppname = $_POST['upname'];
		$uppcat = $_POST['upcat'];
		$uppsubcat = $_POST['usubcat'];
		$uppquan = $_POST['uquantity'];
		$uppbuy = $_POST['ubuyprice'];
		$uppsell = $_POST['usellprice'];
		$uppdate = $_POST['uincomedate'];
		$uppdes = $_POST['udescribe'];
		$uppactivity = $_POST['uact'];

		$plength = validName($uppname);

		if (empty($uppname) || empty($uppcat) || empty($uppsubcat) || empty($uppquan) ||empty($uppbuy) || empty($uppsell) || empty($uppdate) || empty($uppdes) || empty($uppactivity) || empty($_FILES['upimage']['name'])) {
			
			echo '<script type="text/javascript">alert("Empty");</script>';
		}else if (strlen($uppname) != $plength) {
			echo "<script> alert('Product name not valid'); </script>";
		}elseif (strpos($uppdes, '.') == false) {
			echo "<script> alert('Give fullstop after each line'); </script>";
		}else{

				$dir1 ="../upload/";
				$name1 =$_FILES['upimage']['tmp_name'];
				$rname1 = $_FILES['upimage']['name'];
				$ext1 = explode('.', $rname1);
				$newname1= uniqid().'.'.$ext1[1];
				move_uploaded_file($name1, $dir1.$newname1);

				if ($uppactivity == "Available") {
					
					$finalAct1 = 1;
				}elseif ($uppactivity == "Sold-Out") {
					$finalAct1 = 0;
				}
			
			$stat = productUpdate($_SESSION['pid'],$uppname,$uppsubcat,$uppquan,$uppbuy,$uppsell,$uppdate,$uppdes,$finalAct1,$newname1);

			if ($stat) {
				header('location: ../view/AdminProductDetails.php?msg=Updating successfull');
			}else{
				header('location: ../view/AdminProductDetails.php?msg=Updating error');
			}

		}	
	}else{
		header('location: ../adminLogin.php');
	}

?>