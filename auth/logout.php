<?php 
	session_start();
	require_once '../common/const.php';
	unset($_SESSION['account']);
	header("Location:".BASE_URL."auth/login.php");
 ?>