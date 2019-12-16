<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
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
		    	<a href="AdminProductDetails.php">Product Details</a>
		  	</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Manage Users</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddUser.php">Add User</a>
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
		<input type="text" name="searchkey" placeholder="Search User">
		<button type="button" class="btn">Search</button>
	</center>
	
	<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px" style="margin-top: 2.5%">
		<tr>
			<th>User Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>User Type</th>
		</tr>
		<tr align="center">
			<td>admin</td>
			<td>admin@gmail.com</td>
			<td>8801234567890</td>
			<td>Admin</td>
		</tr>
		<tr align="center">
			<td>seller</td>
			<td>seller@yahoo.com</td>
			<td>8801631287459</td>
			<td>Seller</td>
		</tr>
		<tr align="center">
			<td>admin2</td>
			<td>admin2@yahoo.com</td>
			<td>8801795328617</td>
			<td>Admin</td>
		</tr>
		<tr align="center">
			<td>owner</td>
			<td>owner@gmail.com</td>
			<td>8801912345678</td>
			<td>Admin</td>
		</tr>
		<tr align="center">
			<td>service</td>
			<td>service@outlook.com</td>
			<td>8801898745632</td>
			<td>Seller</td>
		</tr>
		<tr align="center">
			<td>salesman</td>
			<td>salesman@gmail.com</td>
			<td>8801545698712</td>
			<td>Seller</td>
		</tr>
	</table>
			
</body>
</html>

<?php
	}else{
		header('location: ../adminLogin.php');
	}
?>