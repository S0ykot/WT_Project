<?php
session_start();
require_once('../db/buyerFunctions.php');
$Username = $_SESSION['Username'];
$Productname = $_POST['ProName'];
$Productprice = doubleval($_POST['ProPrice']);
$ProductQty = intval($_POST['ProQty']);
$TotalQty = $Productprice*$ProductQty;
$Status = setCart($Username,$Productname,$Productprice,$ProductQty,$TotalQty);
 if($Status)
 {
 	echo "Done";
 }
 else
 	echo "Failed";

 	//echo $Productprice;
?>