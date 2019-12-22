<?php
require_once('../db/buyerFunctions.php');
if(isset($_POST['delete']))
{
	$Delete = $_POST['delete'];

	deleteFromCart($Delete);
}
else
	header('location: ../index.php');
?>