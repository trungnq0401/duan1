<?php 
	if (!isset($_SESSION['account'])) {
		header("location: http://localhost/duan/client/login.php");
	}
	if ($_SESSION['account']['role'] != 1) {
		header("location: http://localhost/duan/client");
	}
 ?>