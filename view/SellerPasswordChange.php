<?php 
session_start();

if ($_SESSION['name'] AND $_SESSION['type']  AND $_COOKIE['timeout']) {
$msg='';
if (isset($_GET['msg'])) {
	$msg = htmlspecialchars($_GET['msg']);
}


?>




<style type="text/css">
	table {
  width: 30%;
  border-collapse: collapse;
}

th,td {
  height: 20px;
  border: 2px solid black;
}

#npass,#cnpass,#cpass
{
	width: 100%;
}

</style>
<script type="text/javascript" src="../js/SellerScript.js"></script>


<center>
	<h3><?=$msg;?></h3>
	<h2>Change Password</h2>
</center>
	<form action="../php/SellerChangePassword.php" method="POST">
	<table border="1" align="center">
	<tr>
		<td>New Password:</td>
		<td><input type="password" name="npass" id="npass"></td>
	</tr>
	<tr>
		<td>Confirm New Password:</td>
		<td><input type="password" name="cnpass" id="cnpass"></td>
	</tr>
	<tr>
		<td>Current Password</td>
		<td><input type="password" name="cpass" id="cpass"></td>
	</tr>
	
	<tr>
		<td colspan="2"></td>
	</tr>

	<tr>
		<td colspan="2"> <input type="submit" name="update" value="update"></td>
	</tr>
</table>

</form>



<?php

}
else
{
	header('Location:../ControlPanel.php');
}

?>