<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
</head>
<body style="background-color: CornflowerBlue; margin: 0;">

	<div class="nav">

		<a href="AdminHome.php" class="a1">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Products</button>
		    <div class="dropdown-content">
		    	<a href="AdminAddProduct.php">Add Product</a>
		    	<a href="AdminProductDetails.php">Product Details</a>
		    	<a href="AdminAddCategory.php">Add Category</a>
		    	<a href="AdminAddSubCategory.php">Add Sub-Category</a>
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
	<form method="POST" action="">
		<table align="center" bgcolor="CornflowerBlue" cellspacing="30px">
			<tr>
				<td colspan="4">
					<center><h1><font color="DarkBlue" face="Cursive"><u>Update User</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="right">
					<input type="text" name="search" placeholder="Search User">
					<button type="button" class="btn">Search</button>
				</td>
			</tr>
			<tr>
				<td>
					User ID:
				</td>
				<td>
					<input type="text" name="uid" placeholder="Enter User ID">
				</td>
				<td>
					First Name:
				</td>
				<td>
					<input type="text" name="fname" placeholder="Enter First Name">
				</td>
			</tr>
			<tr>
				<td>
					Last Name:
				</td>
				<td>
					<input type="text" name="lname" placeholder="Enter Last Name">
				</td>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="uname" placeholder="Enter Username">
				</td>
			</tr>
			<tr>
				<td>
					Email:
				</td>
				<td>
					<input type="text" name="email" placeholder="Enter User Email">
				</td>
				<td>
					Image:
				</td>
				<td>
					<input type="file" name="uimage">
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="Password" name="upass" placeholder="Enter Password">
				</td>
				<td>
					Confirm Password:
				</td>
				<td>
					<input type="Password" name="ucpass" placeholder="Enter Confirm Password">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Update User">
				</td>
				<td >
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
	}else{
		header('location: ../adminLogin.php');
	}
?>