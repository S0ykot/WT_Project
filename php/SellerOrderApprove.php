<?php 
require_once '../db/SellerFunctions.php';

if (isset($_POST['appID'])) {
	$ID = $_POST['appID'];

	if (empty($ID)) {
		echo "<script>alert('NULL submission')</script>";
				echo "<script>window.location='../view/SellerHome.php#profile';</script>";
	}
	else
	{
		$status = order_approve($ID);
		if ($status) {
			echo "Order Approved";
			$unique = '#'.str_replace(".","",microtime(true)).rand(000,999);
			//$status2 = report_add($unique,date("Y-m-d"),);

		}
		else
		{
			echo "Something Wrong";

		}
	}
}
else
{
	header('Location:../view/SellerHome.php');
}

?>