<!DOCTYPE html>
<html>
<head>
	<title>Accessoy Store</title>
	<link rel="stylesheet" href="css/buyerStyle.css">
	<script type="text/javascript" src="js/IndexMenu/buyerScript.js"></script>
</head>

<body>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="20%" height="70px" align="center"><font size="20px" color="dodgerblue"><b>TITLE</b></font></td>
							<td width="">
								<input type="text" id="search" placeholder="Search..."><input type="submit" value="Search" id="btn">
							</td>
							<td width="30%">
								<?php
									if (isset($_COOKIE['id'])) {
										?>
										<a href="view/Profile/buyerDashboard.php"><div id="myAccount">Account</div></a>
										<?php
									}
									else{
										?>
										 <a href="view/buyerLogin.php"><div id="sign">Sign In</div></a>
										 <?php
									}
									?>

								<a href="view/cart.php"><div id="cart">Cart</div></a>
							</td>
						</tr>
					</table>
					<div id="menuBar">
						<nav id="menuContainer">
							<menu id="listContainer">
								<ul id="lists">
								
									<li><a href="index.php">Home</a></li>
									
									<li><a href="" onmouseover="indexSmartphone()" id="smartphone">Smartphone</a>
										<ul id="sub_list">
											
										</ul>
									</li>
									
									<li><a href="" onmouseover="indexComputer()" id="computer">Computer</a>
										<ul id="ComCat">
											
										</ul>
									</li>
									
									<li><a href="" onmouseover="indexCamera()" id="camera">Camera</a>
										<ul id="CamCat">
											
										</ul>
									</li>
									
									<li><a href="" onmouseover="indexLifestyle()" id="lifestyle">Lifestyle</a>
										<ul id="LifeCat">
											
										</ul>
									</li>
								</ul>
							</menu>
						</nav>
					</div>
					<img src="view/Images/Cover.jpg" alt="" height="400px" width="100%">
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr><td colspan="3" align="center" height="30px" bgcolor="dodgerblue">**Hot Deals**</td></tr>
						<tr>
							<td width="20%" valign="top" align="center" bgcolor="#E8EBEC"><font color="tomato">Lifestyle <br> Accessories</font></td>
							<td>
								<table border="1px" width="100%" cellpadding="0px" cellspacing="0px">
									<tr>
										<td width="20%" align="center"> <img src="view/Images/w1.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Watch </a> 	<br>1200tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/w1.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Watch </a>	<br>1200tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/w1.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Watch </a>		<br>1200tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/w1.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Watch </a>		<br>1200tk <br><br> Available</td>
									</tr>
								</table>
							</td>
							<td width="20%" align="center" bgcolor="#E8EBEC"><a href="view/ProductPages/lifestyle.php">More</a></td>
						</tr>
						<tr><td colspan="3" align="center" height="30px" bgcolor="dodgerblue">**Hot Deals**</td></tr>
						<tr>
							<td width="20%" valign="top" align="center" bgcolor="#E8EBEC"><font color="tomato">Smartphone <br> Accessories</font></td>
							<td>
								<table border="1px" width="100%" cellpadding="0px" cellspacing="0px">
									<tr>
										<td width="20%" align="center"> <img src="view/Images/mobileLense.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Smartphone Camera Lense </a> 	<br>2000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/mobileLense.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Smartphone Camera Lense </a>		<br>2000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/mobileLense.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Smartphone Camera Lense </a>		<br>2000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/mobileLense.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Smartphone Camera Lense </a>		<br>2000tk <br><br> Available</td>
									</tr>
								</table>
							</td>
							<td width="20%" align="center" bgcolor="#E8EBEC"><a href="view/ProductPages/smartphone.php">More</a></td>
						</tr>
						<tr><td colspan="3" align="center" height="30px" bgcolor="dodgerblue">**Hot Deals**</td></tr>
						<tr>
							<td width="20%" valign="top" align="center" bgcolor="#E8EBEC"><font color="tomato">Computer <br> Accessories</font></td>
							<td>
								<table border="1px" width="100%" cellpadding="0px" cellspacing="0px">
									<tr>
										<td width="20%" align="center"> <img src="view/Images/cooler.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Laptop Cooler </a>	<br>6000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/cooler.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Laptop Cooler </a>		<br>6000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/cooler.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Laptop Cooler </a>		<br>6000tk <br><br> Available</td>
										<td width="20%" align="center"> <img src="view/Images/cooler.jpg" alt="" height="125px" width="100px"><br><br>
											<br><br><hr width="120px"><a href="view/ProductPages/productDetails.php">Laptop Cooler </a>		<br>6000tk <br><br> Available</td>
									</tr>
								</table>
							</td>
							<td width="20%" align="center"  bgcolor="#E8EBEC"><a href="view/ProductPages/computer.php">More</a></td>
						</tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
						<tr><hr></tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" align="center">
						<tr>
							<td valign="middle" width="49%" align="center"><img src="view/Images/shopnow.png" alt="" height="100px" width="50%"></td>
						</tr>
					</table>
					<table border="0px" width="100%" cellpadding="0px" cellspacing="0px" bgcolor="#f1f1f1">
						<tr>
							<td width="10%"></td>
							<td align="center">
								<div class="footerHeader"><h4>KNOW US</h4></div>
								<a href="view/FooterInfo/aboutus.php"><div class="footerContents">About Us</div></a>
								<a href="view/FooterInfo/privacypolicy.php"><div class="footerContents">Privacy Policy</div></a>
								<a href="view/FooterInfo/cookiepolicy.php"><div class="footerContents">Cookie Ploicy</div></a>
								<a href="view/FooterInfo/warrentypolicy.php"><div class="footerContents">Warrenty Policy</div></a>
								<a href="view/FooterInfo/shippingpolicy.php"><div class="footerContents">Shipping Policy</div></a>
								<a href="view/FooterInfo/whyshopping.php"><div class="footerContents">Why Shopping Here</div></a>
								<a href="view/FooterInfo/termspolicy.php"><div class="footerContents">Terms & Conditions</div></a>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<div class="footerHeader"><h4>YOUR CONCERN</h4></div>
								<?php
									if (isset($_COOKIE['id'])) {
								?>
										<a href="view/Profile/buyerDashboard.php"><div class="footerContents">Your Account</div></font></a>
										<a href="view/Profile/buyerOrder.php"><div class="footerContents">Your Orders</div></a>
								<?php }
									else 
										{
								?>
										<a href="view/buyerLogin.php"><div class="footerContents">Your Account</div></a>
										<a href="view/buyerLogin.php"><div class="footerContents">Your Orders</div></a>
								<?php
									}
								?>
								<a href="view/FooterInfo/howorder.php"><div class="footerContents">How to make an Order</div></a>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<div class="footerHeader"><h4>GET IN TOUCH US</h4></div>
								<a href="view/FooterInfo/contactus.php"><div class="footerContents">Contact Us</div></a>
								<div class="footerHeader"><h4>PAYMENT METHODS</h4></div>
								<a href="view/FooterInfo/cod.php"><div class="footerContents">Cash On Delivery</div></a>
								<a href="view/FooterInfo/bkash.php"><div class="footerContents">bKash</div></a>
							</td>
							<td width="10%"></td>
							<td align="center" valign="top">
								<div class="footerHeader"><h4>LOCATION</h4></div>
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