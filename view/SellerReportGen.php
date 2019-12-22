<script type="text/javascript" src="../js/SellerScript.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>



<?php 
session_start();
require_once '../db/SellerFunctions.php';


if ($_SESSION['name'] AND $_SESSION['type'] AND $_COOKIE['timeout']) {


?>

<center>
	<h1>Report</h1>
		<input type="date" name="date1" id="date1"> To <input type="date" name="date2" id="date2"> <button onclick="get();">Submit</button>
		<p id="report"></p>

		<br>
		<button id="export">Export</button>
		<script>
			$(document).ready(function(){  
      $('#export').click(function(){  
           var excel_data = $('#report_gen').html();     
           window.location = "../php/export.php?data=" + excel_data;
      });  
 }); 
		</script>
</center>





<?php

}
else
{
	header('Location:../ControlPanel.php');
}


 ?>