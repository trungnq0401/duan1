<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 		<?= $_SESSION['account']['name'] ?>
 </body>
 </html>