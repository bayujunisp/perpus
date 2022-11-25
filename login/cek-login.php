<?php
session_start();

$NIS = $_SESSION['nis'];

if (!isset($NIS) || empty($NIS)) {
	
	header('location:index.php');
}
?>