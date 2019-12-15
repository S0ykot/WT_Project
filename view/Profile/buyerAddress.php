<?php session_start();

if (isset($_SESSION['NAME'])) { ?>


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
							<td width="20%"><a href="buyerDashboard.php">
								<font color="tomato">My Account</font></a>
								&emsp;&emsp;
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
					<table>
						<tr><hr></tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr>
							<td height="5px" bgcolor="white" colspan="1">
							<td height="5px" bgcolor="dodgerblue" colspan="2"></td>
							<td height="5px" bgcolor="white" colspan="1">
							<td height="5px" bgcolor="white" colspan="2"></td>
						</tr>
						<tr>
							<td width="5%"></td>
							<td width="1%" bgcolor="#E8EBEC"></td>
							<td width="15%" bgcolor="#E8EBEC">
								<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
									<tr>
										<td><a href="../buyerLogoutCheck.php"><font color="black">Logout</font></a></td>
									</tr>
									<tr><td height="20px"></td></tr>
									<tr>
										<td><a href="buyerDashboard.php"><font color="black">My Dashboard</font></a></td>
									</tr>
									<tr><td height="20px"></td></tr>
									<tr>
										<td><a href="buyerContact.php"><font color="black">Account Information</font></a></td>
									</tr>
									<tr><td height="20px"></td></tr>
									<tr>
										<td><a href="buyerAddress.php"><font color="black">Address</font></a></td>
									</tr>
									<tr><td height="20px"></td></tr>
									<tr>
										<td><a href="buyerOrder.php"><font color="black">My Orders</font></a></td>
									</tr>
									<tr><td height="20px"></td></tr>
								</table>
							</td>
							<td width="2%"></td>
							<td width="1%" bgcolor="white"></td>
							<td bgcolor="">
								<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
									
									<tr>
										<td>
											<font color="dodgerblue" size="5px">Address Book</font>
										</td>
									</tr>
									<tr>
										<td height="20px"></td>
									</tr>
									<tr>
										<td height="5px" bgcolor="dodgerblue"></td>
									</tr>
									<tr>
										<td bgcolor="#E8EBEC">
											<font color="tomato"><br>&emsp;Billing Address</font>
										</td>
									</tr>
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['NAME']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['EMAIL']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['ADDRESS']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['CONTACT']?></td></tr>
									
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
									<tr>
										<td bgcolor="#E8EBEC">
											&emsp;<a href="buyerChangeAddress.php"><font color="#8F2792">Change Billing Addres</font></a>
										</td>
									</tr>
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
									
									<tr>
										<td bgcolor="#E8EBEC">
											<font color="tomato"><br>&emsp;Shipping Address</font>
										</td>
									</tr>
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['NAME']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['EMAIL']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['ADDRESS']?></td></tr>
										<tr><td bgcolor="#E8EBEC">&emsp;<?= $_SESSION['CONTACT']?></td></tr>
									
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
									<tr>
										<td bgcolor="#E8EBEC">
											&emsp;<a href="buyerChangeAddress.php"><font color="#8F2792">Change Shipping Addres</font></a>
										</td>
									</tr>
									<tr><td height="20px" bgcolor="#E8EBEC"></td></tr>
									
								</table>
							</td>
							<td width="5%"></td>
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
								<a href="../Profile/buyerDashboard.php"><font color="black">Your Account</font></a> <br><br>
								<a href="../Profile/buyerOrder.php"><font color="black">Your Orders</font></a> <br><br>
								<a href="../FooterInfo/howorder.php"><font color="black">How to make an Order</font></a> <br><br>
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

<?php
}
	else
		header('location: ../index.php');

?>