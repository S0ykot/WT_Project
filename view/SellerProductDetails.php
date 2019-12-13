<?php
session_start();
error_reporting(0);
require_once '../db/SellerFunctions.php';
if ($_SESSION['name'] AND $_SESSION['type']) {
$act="";
?>

	<link rel="stylesheet" type="text/css" href="../css/SellerProduct.css">
	<center><h1>Product Details</h1></center>
	<table border="1" width="50%" align="center">
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
			$data = product_details();
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


<?php
}
else
{
	header('Location:../ControlPanel.php');
}


?>