
<script type="text/javascript" src="../js/SellerScript.js"></script>

<?php 

require_once '../db/SellerFunctions.php';



if ($_POST['d1'] AND $_POST['d2']) {
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];

	if (empty($d1) AND empty($d2)) {
		echo "Null";
	}
	else
	{
		
?>


<table border="1" id="report_gen">
	<tr>
		<th>rID</th>
		<th>Transaction ID</th>
		<th>Transaction Date</th>
		<th>Profit</th>
		<th>Order Date</th>
		<th>Status</th>
		<th>Customer ID</th>
	</tr>

	<?php 
		$data = reportShow($d1,$d2);
		while ($row = mysqli_fetch_assoc($data)) {
			echo "

		<tr>
		<td align='center'>".$row['rid']."</td>
		<td align='center'>".$row['transaction_id']."</td>
		<td align='center'>".$row['transaction_date']."</td>
		<td align='center'>".$row['profit']."</td>
		<td align='center'>".$row['order_date']."</td>
		<td align='center'>".$row['status']."</td>
		<td align='center'>".$row['cid']."</td>
		
	</tr>



			";

}
	 ?>


</table>



<?php

	}
}
else
{

}


?>