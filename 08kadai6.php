<?php
// ‚UDshowŠÖ”‚ÅŠeƒe[ƒuƒ‹‚Ìî•ñ‚Ìˆê——‚ª•\Ž¦‚³‚ê‚é‚æ‚¤‚É‚µ‚Ä‚­‚¾‚³‚¢B

require_once("08kadai3.php");

$pdo = connectDb();

Class human extends base{
	private $table;
    //‰Šúˆ—
	function constract(){
		$this->table = "human";
	}
	//Œp³{Œãˆ—
	function load(){
		$human = $this->table;
		$sql = "select * from". $human;
		global $pdo;
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	}
	//Œãˆ—
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
	//Œp³{Œãˆ—
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

