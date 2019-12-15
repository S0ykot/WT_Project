<?php 
	
	session_start();

	if (isset($_SESSION['username'])) {	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sales Report</title>
</head>
<body>
	
		<table border="0" width="100%" bgcolor="PaleTurquoise">
			<tr>
				<td width="100%" height="50px">
					<center><h1><font color="DarkBlue" face="Cursive"><u>Sales Report</u></font></h1></center>
				</td>
			</tr>
			<tr>
				<td align="center">
					<table bgcolor="PaleTurquoise" cellspacing="20px">
						<tr>
							<td><b>From:</b></td>
							<td>
								<input type="date" name="fromdate" >
							</td>
						</tr>
						<tr>
							<td><b>To:</b></td>
							<td>
								<input type="date" name="todate" >
							</td>
						</tr>
					</table>
				</td>		
			</tr>
			<tr>
				<td>
					<table bgcolor="CornflowerBlue" width="100%" cellspacing="20px">
						<tr>
							<th>Transaction Date</th>
							<th>Transaction ID</th>
							<th>Order Number</th>
							<th>Amount</th>
							<th>Profit</th>
						</tr>
						<tr align="center">
							<td>12/11/2018</td>
							<td>ds42fgh5h</td>
							<td>00001</td>
							<td>5000</td>
							<td>1200</td>
						</tr>
						<tr align="center">
							<td>12/11/2018</td>
							<td>ds55gjh5h</td>
							<td>00002</td>
							<td>1000</td>
							<td>220</td>
						</tr>
						<tr align="center">
							<td>15/11/2018</td>
							<td>ds98ojm5h</td>
							<td>00003</td>
							<td>10000</td>
							<td>2500</td>
						</tr>
						<tr align="center">
							<td>19/11/2018</td>
							<td>dshhfhjh5h</td>
							<td>00004</td>
							<td>2000</td>
							<td>200</td>
						</tr>
						<tr align="center">
							<td>20/11/2018</td>
							<td>dsoo63h5h</td>
							<td>00005</td>
							<td>500</td>
							<td>150</td>
						</tr>
						<tr align="center">
							<td>21/11/2018</td>
							<td>ds55qj65h</td>
							<td>00006</td>
							<td>3000</td>
							<td>700</td>
						</tr>
						<tr align="center">
							<td>21/11/2018</td>
							<td>dsje5hl4</td>
							<td>00007</td>
							<td>6500</td>
							<td>1400</td>
						</tr>
						<tr align="center">
							<td>21/11/2018</td>
							<td>ds58gjh5h</td>
							<td>00008</td>
							<td>7520</td>
							<td>1840</td>
						</tr>
						<tr align="center">
							<td>22/11/2018</td>
							<td>ds2lyjh5h</td>
							<td>00009</td>
							<td>600</td>
							<td>120</td>
						</tr>
						<tr align="center">
							<td>22/11/2018</td>
							<td>ds96sh5p</td>
							<td>00010</td>
							<td>1200</td>
							<td>300</td>
						</tr>
					</table>
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