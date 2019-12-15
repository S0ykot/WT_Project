<?php
	require_once('../db/AdminProductFunction.php');

	$pname = "";
	$cat = "";
	$subcat = "";
	$quan = "";
	$buy = "";
	$sell = "";
	$date = "";
	$des = "";
	$activity = "";
	$rname = "";

	

	if (isset($_POST['submit'])) {
		$pname = $_POST['pname'];
		$cat = $_POST['pcat'];
		$subcat = $_POST['subcat'];
		$quan = $_POST['quantity'];
		$buy = $_POST['buyprice'];
		$sell = $_POST['sellprice'];
		$date = $_POST['incomedate'];
		$des = $_POST['describe'];
		$activity = $_POST['act'];

		$length = validName($pname);

		if (empty($pname) || empty($cat) || empty($subcat) || empty($quan) ||empty($buy) || empty($sell) || empty($date) || empty($des) || empty($activity) || empty($_FILES['pimage']['name'])) {
			
			echo "<script> alert('.$activity.'); </script>";
		}else if (strlen($pname) != $length) {
			echo "<script> alert('Product name not valid'); </script>";
		}elseif (strpos($des, '.') == false) {
			echo "<script> alert('Give fullstop after each line'); </script>";
		}else{

				$dir ="../upload/";
				$name =$_FILES['pimage']['tmp_name'];
				$rname = $_FILES['pimage']['name'];
				$ext = explode('.', $rname);
				$newname = uniqid().'.'.$ext[1];
				move_uploaded_file($name, $dir.$newname);

				if ($activity == "Available") {
					
					$finalAct = 1;
				}else{
					$finalAct = 0;
				}
			

			$status = productAdd($pname,$subcat,$quan,$buy,$sell,$date,$des,$finalAct,$newname);

			if ($status) {
				header('location: ../view/AdminAddProduct.php?msg=success');
			}else{
				header('location: ../view/AdminAddProduct.php?msg=Error');
			}

		}	
	}else{
		header('location: ../adminLogin.php');
	}

?>