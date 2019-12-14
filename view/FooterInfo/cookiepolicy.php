<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Accessoy Store</title>
</head>

<body>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="20%" height="80px" align="center"><font size="20px" color="dodgerblue"><b>TITLE</b></font></td>
							<td width="">
								<input size="30px" type="text" value="" placeholder="Search"><input type="submit" value="Search">
							</td>
							<td width="20%">
								<?php
									if (isset($_SESSION['NAME'])) {
										echo '<a href="../Profile/buyerDashboard.php"><font color="tomato">My Account</font></a>&emsp;&emsp;';
									}
									else
										echo '<a href="../buyerLogin.php"><font color="tomato">Sign In</font></a>&emsp;&emsp;';
								?>
								<a href="../cart.php"><font color="#8F2792">Cart</font></a>
							</td>
						</tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr>
							<td height="30px" bgcolor="dodgerblue">
								<nav>
									&emsp;&emsp;&emsp;&ensp;
									<a href="../../index.php"><font color="white">Home</font></a>
									&emsp;&emsp;&emsp;
									<a href="../ProductPages/smartphone.php"><font color="white">Smartphone</font></a>
									&emsp;&emsp;&emsp;
									<a href="../ProductPages/computer.php"><font color="white">Computer</font></a>
									&emsp;&emsp;&emsp;
									<a href="../ProductPages/camera.php"><font color="white">Camera</font></a>
									&emsp;&emsp;&emsp;
									<a href="../ProductPages/lifestyle.php"><font color="white">Lifestyle</font></a>
								</nav>
							</td>
						</tr>
					</table>
					
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" align="center">
						<tr>
							<td valign="middle"><img src="Images/Cover.jpg" alt="" height="400px" width="100%"></td>
						</tr>
					</table>
					<table>
						<tr><hr></tr>
					</table>
						<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#E8EBEC">
							<tr>
								<td width="2%"></td>
								<td>
									<h1>Cookie Policy</h1>
								</td>
							</tr>
						</table>
					<table>
						<tr><hr></tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="10%"></td>
							<td align="center">
								<h4>KNOW US</h4>
								<a href="../FooterInfo/aboutus.php"><font color="black">About Us</font></a> <br><br>
								<a href="../FooterInfo/privacypolicy.php"><font color="black">Privacy Policy</font></a> <br><br>
								<a href="../FooterInfo/cookiepolicy.php"><font color="black">Cookie Ploicy</font></a> <br><br>
								<a href="../FooterInfo/warrentypolicy.php"><font color="black">Warrenty Policy</font></a> <br><br>
								<a href="../FooterInfo/shippingpolicy.php"><font color="black">Shipping Policy</font></a> <br><br>
								<a href="../FooterInfo/whyshopping.php"><font color="black">Why Shopping Here</font></a> <br><br>
								<a href="../FooterInfo/termspolicy.php"><font color="black">Terms & Conditions</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>YOUR CONCERN</h4>
								<?php
									if (isset($_COOKIE['id'])) {
								?>
										<a href="../Profile/buyerDashboard.php"><font color="black">Your Account</font></a> <br><br>
										<a href="../Profile/buyerOrder.php"><font color="black">Your Orders</font></a> <br><br>
								<?php }
									else 
										{
								?>
										<a href="../buyerLogin.php"><font color="black">Your Account</font></a> <br><br>
										<a href="../buyerLogin.php"><font color="black">Your Orders</font></a> <br><br>
								<?php
									}
								?>								<a href="../FooterInfo/howorder.php"><font color="black">How to make an Order</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>GET IN TOUCH US</h4>
								<a href="../FooterInfo/contactus.php"><font color="black">Contact Us</font></a> <br><br>
								<h4>PAYMENT METHODS</h4>
								<a href="../FooterInfo/cod.php"><font color="black">Cash On Delivery</font></a>&emsp;
								<a href="../FooterInfo/bkash.php"><font color="black">bKash</font></a> <br><br>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<h4>LOCATION</h4>
								Dhaka, Bangladesh
							</td>
							<td width="10%"></td>
						</tr>
						<tr>
							<td colspan="9" bgcolor="#222222" height="60px" valign="middle"><font color="#787878" size="2px">&emsp;&emsp;&emsp;&emsp;&copy;2019 blah blah | All rights reserved</font></td>
						</tr>
					</table>
</body>
</html>