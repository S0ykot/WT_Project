<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<style type="text/css">
		body {
			background-color: CornflowerBlue;
  			margin: 0;
		}

		.a1:hover, .a1:active {
  			background-color: DarkBlue;
		}

	</style>
</head>
<body>
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
	
	<table align="center" cellspacing="30px" bgcolor="CornflowerBlue">
		<tr>
			<td colspan="3" align="center">
				<h1><font color="DarkBlue" face="Cursive"><u>My Profile</u></font></h1>
			</td>
		</tr>
		<tr>
			<td>
				User ID:
			</td>
			<td>
				1
			</td>
			<td rowspan="4">
				<img src="../LoginLogo.jpg" width="150px" height="200px">
			</td>
		</tr>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<?php echo $_SESSION['username']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Username:
			</td>
			<td>
				<?php echo $_SESSION['username']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Email:
			</td>
			<td>
				<?php echo $_SESSION['email']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Phone Number:
			</td>
			<td>
				<?php echo $_SESSION['phone']; ?>
			</td>
			<td rowspan="2">
				<a href="AdminHome.php" class="a1" style="">Update Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				User Type:
			</td>
			<td>
				<?php echo $_SESSION['type']; ?>
			</td>
		</tr>
	</table>
		
</body>
</html>

<?php
	}else{
		header('location: ../adminLogin.php');
	}
?>