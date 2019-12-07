<?php
	
		function getConnect(){
			try {
				$connect = new PDO("mysql:host=127.0.0.1;dbname=project_duan1;charset=utf8","root", "");
				return $connect;
			} catch (Exception $e) {
				echo 'khong the ket noi co so du lieu';
				die;
			}
		}
		function executequery($sqlQuery, $getall = false){
			$conn = getConnect();
			$stmt = $conn->prepare($sqlQuery);
			$stmt->execute();
			if ($getall) {
				$result = $stmt->fetchall();
			}
			else {
				$result = $stmt->fetch();
			}
			return $result;
		}
	?>