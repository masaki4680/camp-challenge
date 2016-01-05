<?php
function connectDb(){
	$param = "mysql:dbname=challenge_db;host=localhost";
	try{
		$pdo = new PDO($param,"root","46803980a");
		return $pdo;
	}catch(PDOException $e){
		echo $e->getMessage();
		exit;
	}
}
?>