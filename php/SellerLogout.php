<?php
session_start();

$d = session_destroy();

if ($d) {
	header('location:../ControlPanel.php');
}


?>