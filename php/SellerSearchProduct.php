<?php
session_start();
error_reporting(0);
require_once '../db/SellerFunctions.php';
if ($_SESSION['name'] AND $_SESSION['type'] AND $_COOKIE['timeout']) {
	$act="";
	if ($_POST['search']) {
		$value = $_POST['search'];
	}

	if (empty($value)) {
		// nothing will show
	}
	else
	{




?>

	<link rel="stylesheet" type="text/css" href="../css/SellerProduct.css">
	<div id="div1">
	<table border="1" width="50%" align="center" id="Stable">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Buying price</th>
		<th>Selling price</th>
		<th>Activity</th>
		<th>Action</th>
	</tr>
	<tbody>
		<?php 
			$data = product_search($value);
			while ($row=mysqli_fetch_assoc($data)) {
				if ($row['activity']==1) {
					$act="Active";
				}
				else
				{
					$act="Inactive";
				}
				echo 
				"<tr>
				<td align='center'><b>".$row['pid']."</b></td>
				<td align='center'>".$row['name']."</td>
				<td align='center'>".$row['quantity']."</td>
				<td align='center'>".$row['buying_price']."</td>
				<td align='center'>".$row['selling_price']."</td>
				<td align='center'>".$act."</td>
				<td align='center'><button id='edit'>Edit</button> &nbsp <button id='del'>Delete</button></td>
				</tr>
				";
			}
		 ?>
		 </tbody>
</table>
</div>


<?php

}
}
else
{
	header('Location:../ControlPanel.php');
}


?>