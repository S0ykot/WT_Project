<?php  
error_reporting(0);
session_start();
require_once '../db/SellerFunctions.php';
if ($_SESSION['name'] AND $_SESSION['type'] AND $_COOKIE['timeout']) {


?>

<script type="text/javascript" src="../js.SellerScript.php"></script>
<style type="text/css">
	#catT
	{
		width: 20%;
  border-collapse: collapse;
  text-align: center;
  color: black;
	}
	th,td {
  height: 50px;
  border: 2px solid black;
}
</style>
<center>
	<h1>Add Category</h1>
	<form method="POST" action="../php/SellerAddCategory.php">
		<table border="1" width="20%" id="catT">
			<tr>
				<td>Category Name:</td>
				<td><input type="text" name="cat" id="cat"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</center>


<?php 

}
else
{
	header('Location:../ControlPanel.php');
}

 ?>