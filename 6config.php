<?php
function connectDb(){
	$param = "mysql:dbname=challenge_db;host=localhost";
	try{
		//ここで行われた処置でエラーが発生したら

		//この時の$pdoはローカル変数と定義
		$pdo = new PDO($param,"root","46803980a");
		return $pdo;
	}catch(PDOException $e){
		//ここに書いてある処理を行う。
		return $e->getMessage();
	}

}

$pdo =connectDb();

if(is_string($pdo)){

	echo $pdo;
	exit;
}

?>