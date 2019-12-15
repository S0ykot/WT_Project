<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Promo Code Details</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
	<link rel="stylesheet" type="text/css" href="../css/Table.css">
</head>
<body>
	<div class="nav">

		<a href="AdminHome.php" class="a1">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Products</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddProduct.php">Add Product</a>
		    	<a href="AdminUpdateProduct.php">Update Product</a>
		    	<a href="AdminRemoveProduct.php">Remove Product</a>
		    	<a href="AdminProductDetails.php">Product Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Manage Users</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddUser.php">Add User</a>
		    	<a href="AdminUpdateUser.php">Update User</a>
		    	<a href="AdminRemoveUser.php">Remove User</a>
		    	<a href="AdminUserDetails.php">User Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Sales Report</button>
		    <div class="dropdown-content">
		    	<a href="AdminGenerateReport.php">Generate Report</a>
			</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Promo Code</button>
		    <div class="dropdown-content">
		    	<a href="AdminGeneratePromoCode.php">Generate Promo Code</a>
		    	<a href="AdminEnableOrDisablePromoCode.php">Enable/Disable Promo Code</a>
		    	<a href="AdminPromoCodeDetails.php">Promo Code Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Profile</button>
		    <div class="dropdown-content">
		    	<a href="AdminProfileView.php">My Profile</a>
		    	<a href="AdminChangePassword.php">Change Password</a>
		    	<a href="../php/AdminLogout.php">Logout</a>
		  	</div>
		</div>
	</div>
	<center>
		<h1><font color="DarkBlue" face="Cursive"><u>User Details</u></font></h1><br><br>
		<input type="text" name="searchkey" placeholder="Search Promo Code">
		<button type="button" class="btn">Search</button>
	</center>
		
	<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px" style="margin-top: 2.5%">
		<tr>
			<th>Promo Code</th>
			<th>Discount Percentage</th>
			<th>Status</th>
		</tr>
		<tr align="center">
			<td>BDXVHE</td>
			<td>10%</td>
			<td>Enable</td>
		</tr>
		<tr align="center">
			<td>BDpHdE</td>
			<td>15%</td>
			<td>Disable</td>
		</tr>
		<tr align="center">
			<td>AlPerd</td>
			<td>20%</td>
			<td>Disable</td>
		</tr>
		<tr align="center">
			<td>PDerLH</td>
			<td>25%</td>
			<td>Enable</td>
		</tr>
		<tr align="center">
			<td>BDALL</td>
			<td>5%</td>
			<td>Enable</td>
		</tr>
		<tr align="center">
			<td>BlKVHE</td>
			<td>10%</td>
			<td>Disable</td>
		</tr>
	</table>
				
</body>
</html>

<?php
	}else{
		header('location: ../adminLogin.php');
	}
?>