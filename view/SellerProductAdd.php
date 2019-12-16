<?php
error_reporting(0);
session_start();
require_once '../db/SellerFunctions.php';

if ($_SESSION['name'] AND $_SESSION['type'] AND $_COOKIE['timeout']) {

?>
<script type="text/javascript" src="../js/SellerScript.js"></script>
<style type="text/css">
	input
	{
		width: 100%;

	}
	table {
	  width: 40%;
	  border-collapse: collapse;
	  color: black;

}

th,td {
  height: 20px;
  border: 2px solid black;
}
</style>
<center>
	<h1>Add Product</h1>
	<form method="POST" action="../test.php">
	<table border="1" width="30%">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr><tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity"></td>
		</tr><tr>
			<td>Incoming Date</td>
			<td><input type="date" name="date"></td>
		</tr><tr>
			<td>Buying Price</td>
			<td><input type="text" name="bPrice"></td>
		</tr><tr>
			<td>Selling Price</td>
			<td><input type="text" name="sPrice"></td>
		</tr><tr>
			<td>Description</td>
			<td><textarea name="desc"></textarea style="width: 100%;"></td>
		</tr><tr>
			<td>Image</td>
			<td><input type="file" name="image"></td>
		</tr><tr>
			<td>Acivity</td>
			<td>
				<select name="active">
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</td>
		</tr><tr>
			<td>Catrgory</td>
			<td>
				<select name="catrgory" id="cat" onchange="getSubCat()">
					<option value="">Select Category</option>
				<?php
				$data = getCatageory();
				while ($row=mysqli_fetch_assoc($data)) {
					echo "
					<option value='".$row['cat_id']."'>".$row['cat_name']."</option>
					";
				}

				?>
				</select>
			</td>
		</tr><tr>
			<td>SubCatrgory</td>
			<td>
				<select name="subcat" id="sub">
					<option value="">Select SubCategory</option>
				</select>
			</td>
		</tr><tr>
			<td colspan="2" align="center"><br><input type="submit" name="submit" style="width: 20%; background-color: white;"><br></td>
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