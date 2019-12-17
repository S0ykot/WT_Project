<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Generate Promo Code</title>
	<link rel="stylesheet" type="text/css" href="../css/Navigate.css">
	<link rel="stylesheet" type="text/css" href="../css/Design.css">
</head>
<body style="background-color: CornflowerBlue;">
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
					<center><h1><font color="DarkBlue" face="Cursive"><u>Generate Promo Code</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td>
					Promo Code ID:
				</td>
				<td>
					<input type="text" name="prid" placeholder="Enter Promo Code ID">
				</td>
				<td>
					Promo Code:
				</td>
				<td>
					<input type="text" name="prname" placeholder="Enter Promo Code">
				</td>
			</tr>
			<tr>
				<td>
					Amount of Discount:
				</td>
				<td>
					<input type="text" name="dis" placeholder="Enter Discount Amount in %">
				</td>
				<td>
					Validity:
				</td>
				<td>
					<input type="date" name="prval">
				</td>
			</tr>
			<tr>
				<td>
					Status:
				</td>
				<td>
					<select name="prstat">
						<option value="">Select Status</option>
						<option value="Enable">Enable</option>
						<option value="Disable">Disable</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Generate Promo">
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