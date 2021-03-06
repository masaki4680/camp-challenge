<?php
// ６．show関数で各テーブルの情報の一覧が表示されるようにしてください。

require_once("08kadai3.php");

$pdo = connectDb();



Class human extends base{
	private $table;
	private $result;
    //初期処理





	function __constract(){
		$this->table = "human";
	}

// 	継承＋後処理
	 function load(){
		$human = $this->table;
		$sql = "select * from ". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//後処理
	function show(){
		foreach($this->result as $key){
             foreach($key as $value){
             	 echo $value ."<br>";
             }
		}
	}
}


Class station extends base{
	private $table;
	private $result;

	function __constract(){
		$this->table= "station";
	}
	//継承＋後処理
	function load(){
		$station = $this->table;
		$sql = "select * from ".$station;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function show(){

		foreach($this->result as $key){
			foreach($key as $value){
				echo $value ."<br>";
			}
		}
	}
}



$human =new human();
$human->__constract();
$human->load();
$human->show();

echo "<br>";

$station = new station();
$station->__constract();
$station->load();
$station->show();


