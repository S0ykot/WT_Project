<?php 

session_start();
require_once '../db/SellerFunctions.php';


if ($_SESSION['name'] AND $_SESSION['type'] AND $_COOKIE['timeout']) {


?>

<center>
	<h1>Order List</h1>
	<form action="" method="">
		<table border="1">
			<tr>
				<th>Order No</th>
				<th>Order Date</th>
				<th>Customer Name</th>
				<th>Customer ID</th>
				<th>Items</th>
				<th>Total Cost</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			<tr>
				
			</tr>
		</table>
	</form>
</center>





<?php 

}
else
{
	header('Location:../ControlPanel.php');
}


 ?>