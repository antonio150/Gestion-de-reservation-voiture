<?php 

session_start();

if(!isset($_SESSION['logged']) || !$_SESSION['logged']){
	header("location: http://localhost:8080/projet%20php/");
}

 ?>