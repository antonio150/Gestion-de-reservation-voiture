<?php 
ini_set("display_errors", "off");
	session_start();

if ($_SESSION['name']) {
	$admin = $_SESSION['name'];
	$job = $_SESSION['job'];
	$id = $_SESSION['numero'];
	$numc = $_SESSION['numero'];
}

 ?>
