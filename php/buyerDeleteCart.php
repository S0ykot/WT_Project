<?php
require_once('../db/buyerFunctions.php');
$Delete = $_POST['delete'];

deleteFromCart($Delete);
?>