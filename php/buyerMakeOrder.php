<?php
session_start();
require_once('../db/buyerFunctions.php');
$Username = $_SESSION['Username'];
$Total = $_POST['total'];
$cart=getItems($Username);
$id = getId($Username)['cid'];
$orderList='';
for ($i=0; $i <count($cart) ; $i++) { 
	$orderList.=$cart[$i]['product_name']."(".$cart[$i]['quantity'].")"."\n";
}
$delete = deleteCart($Username);
$status=checkout($id,$orderList,$Total);
if($status)
{
	echo "Done";
}
else
	echo "Failed";


?>