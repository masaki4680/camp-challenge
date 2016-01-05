<?php
// ６．show関数で各テーブルの情報の一覧が表示されるようにしてください。

require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
	private $table;
    //初期処理
	function constract(){
		$this->table = "human";
	}
	//継承＋後処理
	function load(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}
	//後処理
	function show(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $key){
             foreach($key as $value){
             	 echo $value;
             }
		}
	}
}


Class station extends base{
	private $table;

	function constract(){
		$this->table= "station";
	}
	//継承＋後処理
	function load(){
		$station = $this->table;
		$sql = "select * from".$station;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}

	function show(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $key){
			foreach($key as $value){
				echo $value;
			}
		}
	}
}



$answer = human();
$answer->constract();
$answer->show();

