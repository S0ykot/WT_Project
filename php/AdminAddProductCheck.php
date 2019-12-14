<?php
	require_once('AdminProductFunction.php');

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
		if ($_FILES['pimage']['name'] != "") {
		
			$dir ="../upload/product/";
			$name =$_FILES['pimage']['tmp_name'];
			$rname = $_FILES['pimage']['name'];
			$ext = explode('.', $rname);
			$newname = uniqid().'.'.$ext[1];
			move_uploaded_file($name, $dir.$newname);
		}

		$length = validName($pname);

		if (empty($pname) || empty($cat) || empty($subcat) || empty($quan) ||empty($buy) || empty($sell) || empty($date) || empty($des) || empty($activity) || empty($rname)) {
			
			echo "<script> alert('Empty'); </script>";
		}else if (strlen($pname) != $length) {
			echo "<script> alert('Product name not valid'); </script>";
		}else{

			$status = productAdd($pname,$subcat,$quan,$buy,$sell,$date,$des,$activity,$newname);

			if ($status) {
				header('location: ../view/AdminAddProduct.php?msg=success');
			}else{
				header('location: ../view/AdminAddProduct.php?msg=Error');
			}

		}	
	}else{
		header('location: ../index.php');
	}

?>